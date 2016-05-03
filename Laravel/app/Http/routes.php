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
	if(Auth::guest()){
    	return view('welcome');
    }else{
            return redirect()->to('admin');
        }
});


Route::auth();




// if(Auth::guest()){
// Route::get('/register',  function () {
//     return view('welcome');
// });
// }
Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>['auth','administrador'],'prefix'=>'admin'],function(){
	Route::get('/', 'usuarios\usuariosController@index');	
	Route::post('/usuarios/{id}/edit', 'usuarios\usuariosController@guardar');	
	Route::resource('usuarios', 'usuarios\usuariosController');
	//Route::resource('persona', 'PersonaController');
});
Route::group(['middleware'=>['auth','encargado'],'prefix'=>'encargado'],function(){
	Route::post('/usuarios/{id}/edit', 'usuarios\usuariosController@guardar');	
	Route::post('/usuarios/{id}/edit', 'usuarios\usuariosController@guardar');	
	Route::resource('usuarios', 'usuarios\usuariosController');
	Route::get('/', 'usuarios\usuariosController@index');
	//Route::resource('persona', 'PersonaController');
});
Route::group(['middleware'=>['auth','usuario'],'prefix'=>'usuario'],function(){
	Route::get('/', 'usuarios\usuariosController@index');	
	Route::post('/usuarios/{id}/edit', 'usuarios\usuariosController@guardar');	
	Route::resource('usuarios', 'usuarios\usuariosController');
	//Route::resource('persona', 'PersonaController');
});