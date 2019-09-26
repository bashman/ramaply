<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('about', function () {
//    return view('about');
//});


//Route::get('blog-listing', function () {
//    return view('blog-list');
//});

/*
Route::get('product/product-detail', function () {
    return view('product');
}); */

Route::get('/','HomeController@index')->name('home');
Route::get('/home','HomeController@home')->name('home');
Route::get('about','AboutController@index')->name('about');
Route::get('contact','ContactController@index')->name('contact');
Route::get('enquirenow','EnquirenowController@index')->name('enquirenow');
Route::get('media','BlogController@index')->name('media');
Route::get('career','CareerController@index')->name('carerr');
Route::get('products','ProductController@index')->name('productlisting');
Route::get('products/{slug}','ProductController@index')->name('productlisting');
Route::get('product/{slug}','ProductController@productinfo')->name('productinfo');
Route::get('media/{slug}','BlogController@blogdetail')->name('blogdetail');
Route::get('{page}', 'PageController@page')->name('page');

