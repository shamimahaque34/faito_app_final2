<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\HomeProductController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('frontend.')->group(function (){
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('/story/faitology', [HomeController::class, 'faitology'])->name('faitology');
    Route::get('/story/faitotech', [HomeController::class, 'faitotech'])->name('faitotech');
    Route::get('/story/brembology', [HomeController::class, 'brembology'])->name('brembology');
    Route::get('/story/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');

    Route::get('/story/news', [HomeController::class, 'blog'])->name('blog');
    Route::get('/story/news/detail/blogDetails', [HomeController::class, 'blogDetails'])->name('blog-details');

    // Route::get('/language-change/{name}', [HomeController::class,'changeLanguage'])->name('language-change'); // Language Change

    Route::get('/change-language/{local}', function ($local){
        if (!in_array($local, ['en','bn']))
        {
            abort(400);
        }
    
        App::setLocale($local);
        session()->put('locale', $local);
        return redirect()->back();
    })->name('language-change');

    Route::get('/product', [HomeProductController::class, 'product'])->name('product');
    Route::get('/product/detail/subCat', [HomeProductController::class, 'subCat'])->name('sub-cat');
    Route::get('/product/detail/subSubCat', [HomeProductController::class, 'subSubCat'])->name('sub-sub-cat');
    Route::get('/product/detail/productDetails', [HomeProductController::class, 'productDetails'])->name('product-details');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

});
