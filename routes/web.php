<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    // Flash success message to session
    session()->flash('success', 'Welcome to your dashboard! Operation was successful.');

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::get('/lang/{locale}', function ($locale) {
    $availableLocales = ['en', 'fa'];
    if (in_array($locale, $availableLocales)) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');
require __DIR__ . '/auth.php';
