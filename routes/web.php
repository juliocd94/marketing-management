<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect(route('marketplace'));
});

Route::get('/marketplace', function () {
    return Inertia::render('Marketplace');
})->middleware(['auth', 'verified'])->name('marketplace');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('/search', function () {
        return Inertia::render('Search');
    })->name('search');
    Route::get('/inbox', function () {
        return Inertia::render('Inbox');
    })->name('inbox');
    Route::get('/selling', function () {
        return Inertia::render('Selling');
    })->name('selling');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::apiResource('products', ProductController::class);
});

//Temporary route, I will remove it when having the option to log out in the interface
Route::get('/force-logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
});


require __DIR__.'/auth.php';
