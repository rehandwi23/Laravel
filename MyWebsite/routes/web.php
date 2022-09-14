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
})->name('root');

Route::get('/hi', function () {
    return "Hello World";
})->name('greeting');

Route::get('post/{id?}', function ($id = 1) {
    return "Posting Blog ".$id;
})->name('posts');

Route::get('/days/{id}', function($id){
    return "Days".$id;
})->name('days');
