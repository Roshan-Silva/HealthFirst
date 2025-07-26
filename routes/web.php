<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\admin\PostsController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\admin\DoctorController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Slider;
use App\Models\News;
use App\Models\Posts;
use App\Models\Doctor;

Route::get('/', function () {
    $sliders = Slider::all();
    $news = News::latest()->take(3)->get(); 
    return view('frontend.home', compact('sliders','news'));
});

Route::middleware('auth')->group(function(){
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

Route::get('/blogs', function () {
    $posts = Posts::latest()->take(6)->get(); 
    return view('frontend.blogs', compact('posts'));
});

Route::get('/services',function(){
    return view('frontend.services');
});

Route::get('/doctors',[DoctorController::class, 'home'])->name('doctors.home');

Route::get('/contact',function(){
    return view('frontend.contact');
});


Route::get('/appointments',function(){
    return view('frontend.appointments');
});

Route::get('/cleanliness_rule',function(){
    return view('frontend.cleanliness');
});

Route::controller(HomeController::class)->middleware(['auth', 'role:admin'])->group(function (){
    Route::get('/dashboard', 'index')->name('dashboard');
});

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

Route::controller(NewsController::class)->middleware(['auth', 'verified'])->group(function (){
    Route::get('/newsIndex', 'index')->name('news.index');
    Route::post('/newsStore', 'store')->name('news.store');
    Route::post('/newsUpdate', 'update')->name('news.edit');
    Route::get('/newsDelete/{id}', 'destroy')->name('news.delete');
});

Route::controller(SettingsController::class)->middleware(['auth', 'verified'])->group(function (){
    Route::get('/settingsIndex', 'index')->name('settings.index');
    Route::post('/settingsUpdate', 'update')->name('settings.update');
});

Route::controller(PostsController::class)->middleware(['auth', 'verified'])->group(function (){
    Route::get('/postsIndex', 'index')->name('posts.index');
    Route::post('/postsStore', 'store')->name('posts.store');
    Route::post('/postsUpdate', 'update')->name('posts.edit');
    Route::get('/postsDelete/{id}', 'destroy')->name('posts.delete');
});

Route::controller(AppointmentController::class)->middleware(['auth', 'verified'])->group(function (){
    Route::post('/addAppointment', 'store')->name('appointment.store');
    Route::get('/appointmentsIndex', 'index')->name('appointment.index');

});

Route::controller(DoctorController::class)->middleware(['auth', 'verified'])->group(function (){
    Route::get('/doctorsIndex', 'index')->name('doctors.index');
    Route::post('/doctorStore', 'store')->name('doctor.store');
    Route::post('/doctorUpdate', 'update')->name('doctor.edit');
    Route::get('/doctorDelete/{id}', 'destroy')->name('doctor.delete');
});


require __DIR__.'/auth.php';
