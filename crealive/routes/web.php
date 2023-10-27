<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('users/home');});
Route::get('/admin', function () {return view('admin/home');})->middleware('auth');
Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::get('/admin/category', function () {return view('admin/pages/category/category');})->middleware('auth');
Route::get('/admin/category-create', function () {return view('admin/pages/category/category_create');})->middleware('auth');
Route::get('/admin/category-edit', function () {return view('admin/pages/category/category_edit');})->middleware('auth');
Route::get('/admin/subcategory', function () {return view('admin/pages/subcategory/subcategory');})->middleware('auth');
Route::get('/admin/subcategory-create', function () {return view('admin/pages/subcategory/subcategory_create');})->middleware('auth');
Route::get('/admin/subcategory-edit', function () {return view('admin/pages/subcategory/subcategory_edit');})->middleware('auth');
Route::get('/admin/user', function () {return view('admin/pages/users/users');})->middleware('auth');
Route::get('/admin/user-create', function () {return view('admin/pages/users/user_create');})->middleware('auth');
Route::get('/admin/user-edit', function () {return view('admin/pages/users/user_edit');})->middleware('auth');
Route::get('/admin/news', function () {return view('admin/pages/news/news');})->middleware('auth');
Route::get('/admin/news-create', function () {return view('admin/pages/news/news_create');})->middleware('auth');
Route::get('/admin/news-edit', function () {return view('admin/pages/news/news_edit');})->middleware('auth');

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');


