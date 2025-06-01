<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
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



// Route::get('/lang/switch/{locale}', function ($locale) {
//     $allowed = ['en', 'fa'];

//     if (!in_array($locale, $allowed)) {
//         return response()->json(['error' => 'Locale not supported'], 400);
//     }

//     // Save locale to session
//     session(['locale' => $locale]);

//     // Determine direction
//     $direction = ($locale === 'fa') ? 'rtl' : 'ltr';

//     return response()->json([
//         'locale' => $locale,
//         'direction' => $direction,
//     ]);
// })->name('lang.switch');
