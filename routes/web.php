<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\ContactMessage;

// Quando l'utente visita la home, mostriamo la nostra pagina
Route::get('/', function () {
    return view('home');
})->name('home');

// Pagine dedicate
Route::get('/chi-sono', function () {
    return view('pages.about');
})->name('about');

Route::get('/progetti', function () {
    return view('pages.projects');
})->name('projects');

Route::get('/progetti/techzone', function () {
    return view('pages.projects.techzone');
})->name('projects.techzone');

Route::get('/progetti/sito-arte', function () {
    return view('pages.projects.art');
})->name('projects.art');

Route::get('/progetti/progetto-red', function () {
    return view('pages.projects.red');
})->name('projects.red');

Route::get('/blog', function () {
    return view('pages.blog.index');
})->name('blog.index');

Route::get('/blog/ux-design', function () {
    return view('pages.blog.ux-design');
})->name('blog.ux');

Route::get('/blog/react-2026', function () {
    return view('pages.blog.react-2026');
})->name('blog.react');

Route::get('/blog/bootstrap-vs-tailwind', function () {
    return view('pages.blog.bootstrap-vs-tailwind');
})->name('blog.frameworks');

Route::get('/contatti', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contatti', [ContactController::class, 'store'])
    ->middleware('throttle:contact')
    ->name('contact.submit');

Route::get('/contatti/grazie', function () {
    return view('pages.contact-thankyou');
})->name('contact.thankyou');

Route::get('/admin/messages', function () {
    $messages = ContactMessage::latest()->take(50)->get();
    return view('pages.admin.messages', compact('messages'));
})->middleware('admin.basic')->name('admin.messages');
