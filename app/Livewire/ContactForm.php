<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactMessage;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $message = '';
    public string $honeypot = '';
    
    public bool $submitted = false;
    public string $successMessage = '';

    protected array $rules = [
        'name' => 'required|string|min:2|max:100',
        'email' => 'required|email|max:255',
        'message' => 'required|string|min:10|max:2000',
        'honeypot' => 'nullable|string|size:0',
    ];

    protected array $messages = [
        'name.required' => 'Il nome è obbligatorio',
        'name.min' => 'Il nome deve avere almeno 2 caratteri',
        'name.max' => 'Il nome non può superare 100 caratteri',
        'email.required' => 'L\'email è obbligatoria',
        'email.email' => 'Inserisci un\'email valida',
        'message.required' => 'Il messaggio è obbligatorio',
        'message.min' => 'Il messaggio deve avere almeno 10 caratteri',
        'message.max' => 'Il messaggio non può superare 2000 caratteri',
    ];

    /**
     * Real-time validation on blur
     */
    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    /**
     * Submit contact form
     */
    public function submit(): void
    {
        // Honeypot check
        if (!empty($this->honeypot)) {
            $this->resetForm();
            return;
        }

        // Validate all
        $validated = $this->validate();

        try {
            // Save to database
            $contactMessage = ContactMessage::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'message' => $validated['message'],
            ]);

            // Send email
            Mail::to(config('mail.from.address'))
                ->send(new ContactMessageMail($contactMessage));

            // Show success message
            $this->successMessage = __('contact.success');
            $this->submitted = true;
            $this->resetForm();

            // Auto-hide success after 3 seconds
            $this->dispatch('hideSuccessAfterDelay');
        } catch (\Exception $e) {
            $this->addError('general', __('contact.error'));
        }
    }

    public function resetForm(): void
    {
        $this->name = '';
        $this->email = '';
        $this->message = '';
        $this->honeypot = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
