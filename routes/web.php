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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('okul','OkulController');

   /*
    *   GET <url>/okul //points to index() method on UserController
    *   GET <url>/okul/create //points to create() method on UserController
    *   POST <url>/okul //points to store() method on UserController
    *   POST <url>/okul/{userid}/edit //points to edit(userId) method on UserController
    */
