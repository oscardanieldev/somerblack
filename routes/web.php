<?php

use Illuminate\Support\Facades\DB;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {

    $articulos = DB::table('articulos')->get();

    return view('inicio')->with('articulos', $articulos);
});
Route::get('/contactanos/create', 'ContactanosController@create')->name('contactanos.create');
Route::post('/contactanos', 'ContactanosController@store')->name('contactanos.store');
Route::delete('/mensajes/{mensaje}', 'ContactanosController@destroy')->name('contactanos.destroy');
Route::get('/politicadeprivacidad', function () {
    return view('politicadeprivacidad');
});
Route::get('/nosotros', 'NosotrosController@index')->name('nosotros.index');


Route::get('/gestor', 'ArticuloController@index')->name('articulo.index');
Route::get('/gestor/create', 'ArticuloController@create')->name('articulo.create');

Route::post('/gestor/store', 'ArticuloController@store')->name('articulo.store');
Route::get('/articulo/{articulo}', 'ArticuloController@show')->name('articulo.show');



Route::get('/blog', 'BlogsController@index')->name('blog.index');


