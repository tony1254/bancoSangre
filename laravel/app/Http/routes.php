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
	/*Rutas de formularios para Sesion de Usuario*/
	Route::get('/', 'usuarios\usuariosController@index');	
	Route::resource('usuarios', 'usuarios\usuariosController');
	Route::resource('personas', 'personas\personasController');
	Route::post('/usuarios/{id}/edit', 'usuarios\usuariosController@guardar');	
	/*Rutas de formularios para catalogos*/
		Route::get('/catalogos/{catalogo}', 'catalogos\catalogosController@index')->name('admin.catalogos.index');
		Route::post('/catalogos/{catalogo}', 'catalogos\catalogosController@store')->name('admin.catalogos.store');
		Route::get('/catalogos/{catalogo}/create', 'catalogos\catalogosController@create')->name('admin.catalogos.create');
		Route::get('/catalogos/{catalogo}/{id}/show', 'catalogos\catalogosController@show')->name('admin.catalogos.show');
		Route::get('/catalogos/{catalogo}/{id}/edit', 'catalogos\catalogosController@edit')->name('admin.catalogos.edit');
		Route::put('/catalogos/{catalogo}/{id}/update', 'catalogos\catalogosController@update')->name('admin.catalogos.update');
	/*Rutas de formularios para PERSONA*/
		Route::resource('persona', 'personas\personaController');
		Route::get('persona/busqueda', 'personas\personaController@busqueda');
		

	//Route::resource('persona', 'PersonaController');
});
Route::group(['middleware'=>['auth','encargado'],'prefix'=>'encargado'],function(){
	Route::post('/usuarios/{id}/edit', 'usuarios\usuariosController@guardar');	
	Route::resource('usuarios', 'usuarios\usuariosController');
	Route::resource('personas', 'personas\personasController');
	Route::get('/', 'usuarios\usuariosController@index');
	//Route::resource('persona', 'PersonaController');
});
Route::group(['middleware'=>['auth','usuario'],'prefix'=>'usuario'],function(){
	Route::get('/', 'usuarios\usuariosController@index');	
	Route::post('/usuarios/{id}/edit', 'usuarios\usuariosController@guardar');	
	Route::resource('usuarios', 'usuarios\usuariosController');
	Route::resource('personas', 'personas\personasController');
	//Route::resource('persona', 'PersonaController');
});