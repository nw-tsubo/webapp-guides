<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $unseis = ['大吉', '中吉', '小吉', '末吉', '凶'];
    $key = array_rand($unseis);
    $unsei = $unseis[$key];
    
    return view('omikuji', ['unsei' => $unsei]);
});
