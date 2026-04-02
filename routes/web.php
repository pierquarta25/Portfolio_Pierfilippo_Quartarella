<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route principale - homepage
Route::get('/', function () {
    return view('home'); // Cambiato da welcome a home
})->name('home');

// Routes per sezioni pubbliche
Route::get('/chi-sono', function () {
    return view('pages.about');
})->name('about');

// Routes progetti pubblici
Route::resource('projects', ProjectController::class)->only(['index', 'show'])->parameters([
    'projects' => 'project:slug' // Usa slug invece di ID
]);

// Routes blog pubblici
Route::resource('blog', BlogController::class)->only(['index', 'show'])->parameters([
    'blog' => 'blog:slug' // Usa slug invece di ID
]);

// Route contatti
Route::get('/contatti', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contatti', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contatti/grazie', function () {
    return view('pages.contact-thanks');
})->name('contact.thanks');

// Routes admin (protette da autenticazione)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard admin
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Gestione blog
    Route::resource('blogs', AdminBlogController::class);

    // Gestione progetti
    Route::resource('projects', AdminProjectController::class);
});

// Routes autenticazione Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
