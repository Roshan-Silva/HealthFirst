<?php

use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\admin\PostsController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Slider;
use App\Models\News;
use App\Models\Posts;

Route::get('/', function () {
    $sliders = Slider::all();
    $news = News::latest()->take(3)->get(); // Fetch the latest 3 news items
    return view('frontend.home', compact('sliders','news'));
});

// Route::get('/home', function () {
//     $sliders = Slider::all();
//     $news = News::latest()->take(3)->get(); // Fetch the latest 3 news items
//     return view('frontend.userhome', compact('sliders','news'));
// })->middleware(['auth', 'verified']);

// Route::get('/logout', function () {
//     return redirect('/');
// })->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

Route::get('/blogs', function () {
    $posts = Posts::latest()->take(6)->get(); // Fetch the latest 6 posts
    return view('frontend.blogs', compact('posts'));
});

Route::get('/services',function(){
    return view('frontend.services');
});

Route::get('/doctors',function(){
    return view('frontend.doctors');
});

Route::get('/contact',function(){
    return view('frontend.contact');
});


Route::get('/appointments',function(){
    return view('frontend.appointments');
});

Route::get('/cleanliness_rule',function(){
    return view('frontend.cleanliness');
});
    

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'role:admin'])->name('dashboard');

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


require __DIR__.'/auth.php';
