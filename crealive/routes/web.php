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
Route::get('/admin', function () {return view('admin/home');});
Route::get('/login', function () {return view('auth/login');});
Route::get('/category', function () {return view('admin/pages/category/category');});
Route::get('/category-create', function () {return view('admin/pages/category/category_create');});
Route::get('/category-edit', function () {return view('admin/pages/category/category_edit');});
Route::get('/subcategory', function () {return view('admin/pages/subcategory/subcategory');});
Route::get('/subcategory-create', function () {return view('admin/pages/subcategory/subcategory_create');});
Route::get('/subcategory-edit', function () {return view('admin/pages/subcategory/subcategory_edit');});
Route::get('/user', function () {return view('admin/pages/users/users');});
Route::get('/user-create', function () {return view('admin/pages/users/user_create');});
Route::get('/user-edit', function () {return view('admin/pages/users/user_edit');});
Route::get('/news', function () {return view('admin/pages/news/news');});
Route::get('/news-create', function () {return view('admin/pages/news/news_create');});
Route::get('/news-edit', function () {return view('admin/pages/news/news_edit');});



