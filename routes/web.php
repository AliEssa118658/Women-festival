<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


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
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/', [NewsController::class, 'showHomePage'])->name('welcome');

Route::get('/news/{news}', [NewsController::class, 'index'])->name('news');

Route::get('/miss-arab', [NewsController::class, 'missArab'])->name('miss-arab');

Route::get('/first-gen', [NewsController::class, 'FirstGen'])->name('first-gen');

Route::get('/first-gen/{first}', [NewsController::class, 'FirstGenIndex'])->name('first');


Route::get('/honorary', [NewsController::class, 'honorary'])->name('honorary');

Route::get('/gallery', [NewsController::class, 'gallery'])->name('gallery');


Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/care-packages', function () {
    return view('care-packages');
})->name('care-packages');


Route::post('/contact-us',[NewsController::class, 'contactEmail']);
