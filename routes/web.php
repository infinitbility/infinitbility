<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'WebController@index');
Route::get('/about', 'WebController@about');
Route::get('/contact', 'WebController@contact');
Route::post('/save-contact', 'WebController@saveContact');
Route::get('/post/{url}', 'WebController@post');
Route::get('/privacy-policy', 'WebController@privacyPolicy');


Route::prefix('admin')->group(function () {

    Route::get('/', 'Admin\AuthController@index');
    Route::post('/authenticate', 'Admin\AuthController@authenticate');
    Route::get('/logout', 'Admin\AuthController@logout');
    Route::get('/dashboard', 'Admin\DashboardController@dashboard');
    Route::get('/new-posts', 'Admin\PostsController@newPosts');
    Route::post('/save-post', 'Admin\PostsController@savePost');
    Route::get('/update-post/{id}', 'Admin\PostsController@updatePost');
    Route::post('/save-update-post', 'Admin\PostsController@saveUpdatePost');
    
});