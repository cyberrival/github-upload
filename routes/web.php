<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PageController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact', 'PageController@send');

Route::get('/about', 'PageController@about')->name('about');
Route::get('/admin', 'PageController@admin')->middleware('can:administrate')->name('admin');
Route::get('/terms', 'PageController@terms')->name('terms');


// blog posts
Route::get('/blog', 'PostController@index')->name('blog');
Route::get('/blog/{post}', 'PostController@show');

// products
Route::get('/products',  'ProductController@index')->name('products');

// admin - blog posts
Route::get('/admin/posts', 'AdminPostController@index')->middleware('can:administrate');
Route::get('/admin/posts/create', 'AdminPostController@create')->middleware('can:administrate');
Route::get('/admin/posts/{post}/edit', 'AdminPostController@edit')->middleware('can:administrate');
Route::patch('/admin/posts/{post}', 'AdminPostController@update')->middleware('can:administrate');
Route::delete('/admin/posts/{post}', 'AdminPostController@destroy')->middleware('can:administrate');
Route::post('/admin/posts/create', 'AdminPostController@store')->middleware('can:administrate');

// admin - products 
Route::get('/admin/products', 'AdminProductController@index')->middleware('can:administrate');
Route::get('/admin/products/create', 'AdminProductController@create')->middleware('can:administrate');
Route::get('/admin/products/{product}/edit', 'AdminProductController@edit')->middleware('can:administrate');
Route::patch('/admin/products/{product}', 'AdminProductController@update')->middleware('can:administrate');
Route::delete('/admin/products/{product}', 'AdminProductController@destroy')->middleware('can:administrate');
Route::post('/admin/products/create', 'AdminProductController@store')->middleware('can:administrate');
