<?php

use Illuminate\Support\Facades\Route;

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
