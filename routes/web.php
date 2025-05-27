<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\SliderController;
use Illuminate\Support\Facades\Route;
use App\Models\Slider;



Route::get('/', function () {
    $sliders = Slider::all();
    return view('frontend.home', compact('sliders'));
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
    Route::post('/sliderUpdate', 'update')->name('slider.edit');
    Route::get('/sliderDelete/{id}', 'destroy')->name('slider.delete');
});

require __DIR__.'/auth.php';
