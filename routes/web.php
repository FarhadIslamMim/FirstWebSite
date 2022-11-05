<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\ContactController;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });




//Admin all route
Route::middleware(['auth'])->group(function () {
    Route::controller(AdminController::class)->group(function () {

        Route::get('/admin/logout', 'logout')->name('admin.logout');
        Route::get('/admin/profile', 'Profile')->name('admin.profile');
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');

        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');
    });
});

//Admin Home slide all route
Route::controller(HomeSliderController::class)->group(function () {

    //froentend main home route
    Route::get('/', 'HomeMain')->name('home');

    //Backend
    Route::get('/home/slide', 'HomeSlider')->name('home.slide')->middleware('auth');
    Route::post('/update/slider', 'UpdateSlider')->name('update.slider')->middleware('auth');
});

//Admin About page all route
Route::controller(AboutController::class)->group(function () {

    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/update/about', 'UpdateAbout')->name('update.about')->middleware('auth');
    Route::get('/about', 'HomeAbout')->name('home.about');

    Route::get('/about/multi/image', 'AboutMultiImage')->name('about.multi.image');
    Route::post('/store/multi/image', 'StoreMultiImage')->name('store.multi.image')->middleware('auth');
    Route::get('/all/multi/image', 'AllMultiImage')->name('all.multi.image')->middleware('auth');

    Route::get('/edit/multi/image/{id}', 'EditMultiImage')->name('edit.multi.image')->middleware('auth');
    Route::post('/update/multi/image', 'UpdateMultiImage')->name('update.multi.image')->middleware('auth');
    Route::get('/delete/multi/image/{id}', 'DeleteMultiImage')->name('delete.multi.image')->middleware('auth');

    Route::get('/about/show', 'AboutShow')->name('about.show');
});

//Admin Portfolio all route
Route::controller(PortfolioController::class)->group(function () {

    Route::get('/all/portfolio', 'AllPortfolio')->name('all.portfolio')->middleware('auth');
    Route::get('/add/portfolio', 'AddPortfolio')->name('add.portfolio')->middleware('auth');
    Route::post('/store/portfolio', 'StorePortfolio')->name('store.protfolio')->middleware('auth');
    Route::get('/edit/portfolio/{id}', 'EditPortfolio')->name('edit.portfolio')->middleware('auth');
    Route::get('/show/portfolio/{id}', 'ShowPortfolio')->name('show.portfolio')->middleware('auth');
    Route::post('/update/portfolio', 'UpdatePortfolio')->name('update.protfolio')->middleware('auth');
    Route::get('/delete/portfolio/{id}', 'DeletePortfolio')->name('delete.portfolio')->middleware('auth');

    //this route if for Froentend
    Route::get('/portfolio/details/{id}', 'PortfolioDetails')->name('portfolio.details');
    Route::get('/portfolio', 'HomePortfolio')->name('home.portfolio');
});
// Blog Category All Routes
Route::middleware(['auth'])->group(function () {
    Route::controller(BlogCategoryController::class)->group(function () {
        Route::get('/all/blog/category', 'AllBlogCategory')->name('all.blog.category');
        Route::get('/add/blog/category', 'AddBlogCategory')->name('add.blog.category');

        Route::post('/store/blog/category', 'StoreBlogCategory')->name('store.blog.category');

        Route::get('/edit/blog/category/{id}', 'EditBlogCategory')->name('edit.blog.category');
        Route::post('/update/blog/category/{id}', 'UpdateBlogCategory')->name('update.blog.category');

        Route::get('/delete/blog/category/{id}', 'DeleteBlogCategory')->name('delete.blog.category');
    });
});

// Blog All Route
Route::controller(BlogController::class)->group(function () {
    Route::get('/all/blog', 'AllBlog')->name('all.blog')->middleware('auth');
    Route::get('/add/blog', 'AddBlog')->name('add.blog')->middleware('auth');
    Route::post('/store/blog', 'StoreBlog')->name('store.blog')->middleware('auth');
    Route::get('/edit/blog/{id}', 'EditBlog')->name('edit.blog')->middleware('auth');
    Route::post('/update/blog', 'UpdateBlog')->name('update.blog')->middleware('auth');
    Route::get('/delete/blog/{id}', 'DeleteBlog')->name('delete.blog')->middleware('auth');

    //Forntend Route
    Route::get('/blog/details/{id}', 'BlogDetails')->name('blog.details');
    Route::get('/category/blog/{id}', 'CategoryBlog')->name('category.blog');
    Route::get('/blog', 'HomeBlog')->name('home.blog');
});


// Footer All Route
Route::middleware(['auth'])->group(function () {
    Route::controller(FooterController::class)->group(function () {
        Route::get('/footer/setup', 'FooterSetup')->name('footer.setup');
        Route::post('/update/footer', 'UpdateFooter')->name('update.footer');
    });
});
// Contact me All Route
Route::controller(ContactController::class)->group(function () {
    //froent route
    Route::get('/contact', 'Contact')->name('contact.me');
    Route::post('/store/message', 'StoreMessage')->name('store.message');

    //bckend route
    Route::get('/contact/message', 'ContactMessage')->name('contact.message')->middleware('auth');
    Route::get('/delete/message/{id}', 'DeleteMessage')->name('delete.message')->middleware('auth');
    Route::get('/show/message/{id}', 'ShowMessage')->name('show.message')->middleware('auth');
});



Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
