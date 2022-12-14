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

Route::get('/', function () {
    return view('welcome');
});


Route::view('admin/login','admin.login');
Route::view('admin/post/list','admin.post.list');
Route::view('admin/post/add','admin.post.add');
Route::view('admin/post/edit','admin.post.edit');