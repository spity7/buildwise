<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', 'home');

Route::get('home', function () {
    return view('buildwise.home');
})->name('home');

Route::get('/about', function () {
    return view('buildwise.about');
})->name('about');

Route::get('/projects', function () {
    return view('buildwise.projects');
})->name('projects');

Route::get('/gallery', function () {
    return view('buildwise.gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('buildwise.contact');
})->name('contact');

Route::group(['prefix' => 'case', 'as' => 'case.'], function () {
    Route::get('lilas001', function () {
        return view('buildwise.case.lilas001');
    })->name('lilas001');

    Route::get('lilas002', function () {
        return view('buildwise.case.lilas002');
    })->name('lilas002');
});
