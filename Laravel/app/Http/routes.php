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
    return view('welcome');
});


Route::auth();

// Route::get('/registro', function () {
// 	if(Auth::guest()){
//     return view('welcome');

// }else{

// return view('auth/register');
// }
    
// });

// Route::auth();
// if(Auth::guest()){
// Route::get('/register',  function () {
//     return view('welcome');
// });
// }
Route::get('/home', 'HomeController@index');