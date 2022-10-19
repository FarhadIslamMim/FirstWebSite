<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});




//Admin all route
Route::controller(AdminController::class)->group(function(){

    Route::get('/admin/logout','logout')->name('admin.logout');
    Route::get('/admin/profile','Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');

    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
});

//Admin Home slide all route
Route::controller(HomeSliderController::class)->group(function(){

    Route::get('/home/slide', 'HomeSlider')->name('home.slide');
    Route::post('/update/slider', 'UpdateSlider')->name('update.slider');

});

//Admin About page all route
Route::controller(AboutController::class)->group(function(){

    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/update/about', 'UpdateAbout')->name('update.about');
    Route::get('/about', 'HomeAbout')->name('home.about');
});




Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
