<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('front.index');
});

Route::get('/about', function () {
    return view('front.about');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


############## Start Admin Routes #################

Route::prefix('dashboard/')->name('dashboard.')->group(function(){

    Route::middleware('admin')->group(function(){
        Route::view('index', 'dashboard.index')->name('index');
        Route::view('settings','dashboard.settings.index')->name('settings');
        Route::view('skills','dashboard.skills.index')->name('skills');
        Route::view('subscribers','dashboard.subscribers.index')->name('subscribers');
        Route::view('counters','dashboard.counters.index')->name('counters');
    });
    Route::get('login', function () {
        if(Auth::guard('admin')->check()){
            return to_route('dashboard.index');
        }
        return view('dashboard.auth.login');
    })->name('login');


});




############## End Admin Routes #################
