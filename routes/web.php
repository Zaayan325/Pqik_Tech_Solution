<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


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

Route::get('/', function () {
    return view('front-end.front-end');
});
Route::get('/thank-you', function () {
    return view('front-end.front-end');
})->name('thank-you');

Route::post('/submit-form', [FormController::class, 'submitForm']);
Route::get('/thank-you', function () {
    return view('front-end.front-end');
})->name('thank-you');



Route::get('/blog-home', function () {
    return view('blog.index');
});

Route::get('/dashboard', function() {
    return view('admin_pannel.index');
});

//Admin Pannel Routes

Route::get('/dashboard/blog/view', [BlogController::class, 'index'])->name('blog.create');




