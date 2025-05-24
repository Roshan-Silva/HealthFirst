<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\SliderController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(SliderController::class)->middleware(['auth', 'verified'])->group(function (){
    Route::get('/sliderIndex', 'index')->name('slider.index');
    Route::post('/sliderStore', 'store')->name('slider.store');
});

require __DIR__.'/auth.php';
