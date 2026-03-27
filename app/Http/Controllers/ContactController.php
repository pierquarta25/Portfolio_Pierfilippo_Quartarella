<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        if ($request->filled('honeypot')) {
            return back()->with('contact_success', __('contact.success'));
        }

        if (config('services.recaptcha.secret')) {
            $request->validate([
                'g-recaptcha-response' => ['required'],
            ]);

            $verify = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => config('services.recaptcha.secret'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);

            if (!($verify->json('success') === true)) {
                return back()
                    ->withErrors(['recaptcha' => __('contact.recaptcha')])
                    ->withInput();
            }
        }

        $validated = $request->validate([
            'name' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        $contactMessage = ContactMessage::create([
            'name' => $validated['name'] ?? null,
            'email' => $validated['email'],
            'message' => $validated['message'],
            'ip_address' => $request->ip(),
            'user_agent' => (string) $request->userAgent(),
        ]);

        $receiver = config('mail.contact_receiver', config('mail.from.address'));
        if ($receiver) {
            Mail::to($receiver)->send(new ContactMessageMail($contactMessage));
        }

        return redirect()->route('contact.thankyou')->with('contact_success', __('contact.success'));
    }
}
