<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::view('admin', 'admin.index')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::view('schools', 'schools.index')
    ->middleware(['auth', 'verified'])
    ->name('schools');
Route::view('schools/create', 'schools.create')
    ->middleware(['auth', 'verified'])
    ->name('schools.create');
Route::view('schools/{school}', 'schools.show')
    ->middleware(['auth', 'verified'])
    ->name('schools.show');
Route::view('schools/{school}/edit', 'schools.edit')
    ->middleware(['auth', 'verified'])
    ->name('schools.edit');
Route::view('schools/{school}/delete', 'schools.delete')
    ->middleware(['auth', 'verified'])
    ->name('schools.delete');

Route::view('institutions/{school}', 'institutions.index')
    ->name('institutions');

require __DIR__.'/auth.php';
