<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@showWelcome'));
Route::get('login', array('uses' => 'ViewController@pageLogin'));
Route::post('login', array('uses' => 'UserController@loginAccess'));
Route::get('loginResult', array('uses' => 'ViewController@pageLoginResult'));
Route::get('signup', array('uses' => 'ViewController@pageSignup'));
Route::post('signup',  array('uses'=>'UserController@signupUser'));
Route::get('logout', array('uses'=>'UserController@logoutUser'));
Route::get('findpassword', array('uses'=>'ViewController@pageFindpassword'));
Route::post('findpassword', array('uses'=>'UserController@findPassword'));

Route::post('findpassword', array('uses' => 'RemindController@postRemind')); 
Route::get('password/reset/{token}', array('uses' => 'RemindController@getReset'));
Route::post('password/reset/{token}', array('uses' => 'RemindController@postReset'));