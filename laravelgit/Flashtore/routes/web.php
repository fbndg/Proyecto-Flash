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

// Route::get('/Home', function () {
//     return view("index");
// });

Route::get('/Index', 'ProductosController@index');

Route::get('/', 'ProductosController@index');

Route::get('/Store', 'ProductosController@store');

Route::get('/ProductosBorrados', 'ProductosController@productosBorrados')->middleware("auth");

Route::get('/Producto/{id}', 'ProductosController@detalle');

Route::get('/Category/{id}', 'ProductosController@category');

Route::get('/faq', function(){return view("faq");});

Route::get('/Contacto', function(){return view("contacto");});

Route::get('/Perfil', 'UsuarioController@perfil');

Route::post('/Perfil', 'UsuarioController@perfilPost');

Route::get('/Crear', 'ProductosController@crear')->middleware("auth");

Route::post('/Crear', 'ProductosController@crearPost')->middleware("auth");

Route::get('/Editar/{id}', 'ProductosController@editver')->middleware("auth");

Route::post('/Editar/{id}', 'ProductosController@edit')->middleware("auth");

Route::get('/test', function () {
    return view("plantilla");
});

Route::resource('productos', "ProductosController");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
