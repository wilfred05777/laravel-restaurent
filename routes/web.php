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

// Route::get('/', function () {
//     return view('welcome');
// });

//// resource for this tutorial project https://www.youtube.com/watch?v=Kt7dciQ5xGU&list=PLm8sgxwSZofcOCoxwggBQ8FwPSoQUI_So&index=2

Route::get('/', function(){
    return view('frontend.home');
});
