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
//原route
//Route::get('/',function(){returnview('welcome');});

//練習1. (1)
//Route::get('/',function(){return'welcome';});

Route::get('r1', function(){ return redirect('r2'); });
Route::get('r2', function(){ return view('welcome'); });
