<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//RUTAS PARA USUARIOS
Route::get('/usuarios', 'App\Http\Controllers\UsuarioController@index');                //YA FUNCIONAL PARA MOSTRAR REGISTROS
Route::post('/usuarios', 'App\Http\Controllers\UsuarioController@store');               //YA FUNCIONAL PARA INSERTAR REGISTROS
Route::put('/usuarios/{id}', 'App\Http\Controllers\UsuarioController@update');          //YA FUNCIONAL PARA ACTUALIZAR REGISTROS
Route::delete('/usuarios/{id}', 'App\Http\Controllers\UsuarioController@destroy');      //YA FUNCIONAL PARA ELIMINAR REGISTROS


//RUTAS PARA PAGOS
Route::get('/pagos', 'App\Http\Controllers\PagoController@index');                      //YA FUNCIONAL PARA MOSTRAR REGISTROS
Route::post('/pagos', 'App\Http\Controllers\PagoController@store');                     //YA FUNCIONAL PARA INSERTAR REGISTROS
Route::put('/pagos/{id}', 'App\Http\Controllers\PagoController@update');                //YA FUNCIONAL PARA ACTUALIZAR REGISTROS
Route::delete('/pagos/{id}', 'App\Http\Controllers\PagoController@destroy');            //YA FUNCIONAL PARA ELIMINAR REGISTROS


//RUTAS PARA PLAYLIST
Route::get('/playlists', 'App\Http\Controllers\PlaylistController@index');              //YA FUNCIONAL PARA MOSTRAR REGISTROS
Route::post('/playlists', 'App\Http\Controllers\PlaylistController@store');             //YA FUNCIONAL PARA INSERTAR REGISTROS
Route::put('/playlists/{id}', 'App\Http\Controllers\PlaylistController@update');        //YA FUNCIONAL PARA ACTUALIZAR REGISTROS
Route::delete('/playlists/{id}', 'App\Http\Controllers\PlaylistController@destroy');    //YA FUNCIONAL PARA ELIMINAR REGISTROS


//RUTAS PARA ARTISTAS
Route::get('/artistas', 'App\Http\Controllers\ArtistaController@index');                //YA FUNCIONAL PARA MOSTRAR REGISTROS
Route::post('/artistas', 'App\Http\Controllers\ArtistaController@store');               //YA FUNCIONAL PARA INSERTAR REGISTROS
Route::put('/artistas/{id}', 'App\Http\Controllers\ArtistaController@update');          //YA FUNCIONAL PARA ACTUALIZAR REGISTROS
Route::delete('/artistas/{id}', 'App\Http\Controllers\ArtistaController@destroy');      //YA FUNCIONAL PARA ELIMINAR REGISTROS


//RUTAS PARA CANCIONES
Route::get('/canciones', 'App\Http\Controllers\CancionController@index');               //YA FUNCIONAL PARA MOSTRAR REGISTROS
Route::post('/canciones', 'App\Http\Controllers\CancionController@store');              //YA FUNCIONAL PARA INSERTAR REGISTROS
Route::put('/canciones/{id}', 'App\Http\Controllers\CancionController@update');         //YA FUNCIONAL PARA ACTUALIZAR REGISTROS
Route::delete('/canciones/{id}', 'App\Http\Controllers\CancionController@destroy');     //YA FUNCIONAL PARA ELIMINAR REGISTROS


//RUTAS PARA ALBUMES
Route::get('/albumes', 'App\Http\Controllers\AlbumController@index');                   //YA FUNCIONAL PARA MOSTRAR REGISTROS
Route::post('/albumes', 'App\Http\Controllers\AlbumController@store');                  //YA FUNCIONAL PARA INSERTAR REGISTROS
Route::put('/albumes/{id}', 'App\Http\Controllers\AlbumController@update');             //YA FUNCIONAL PARA ACTUALIZAR REGISTROS
Route::delete('/albumes/{id}', 'App\Http\Controllers\AlbumController@destroy');         //YA FUNCIONAL PARA ELIMINAR REGISTROS


//RUTAS PARA CANCIONES FAVS
Route::get('/cancionesFav', 'App\Http\Controllers\CancionFavoritaController@index');    //YA FUNCIONAL PARA MOSTRAR REGISTROS
Route::post('/cancionesFav', 'App\Http\Controllers\CancionFavoritaController@store');   //YA FUNCIONAL PARA INSERTAR REGISTROS
Route::put('/cancionesFav/{id}', 'App\Http\Controllers\CancionFavoritaController@update');//YA FUNCIONAL PARA ACTUALIZAR REGISTROS
Route::delete('/cancionesFav/{id}', 'App\Http\Controllers\CancionFavoritaController@destroy');//YA FUNCIONAL PARA ELIMINAR REGISTROS


//RUTAS PARA ALBUMES FAVS
Route::get('/albumesFav', 'App\Http\Controllers\AlbumFavoritoController@index');        //YA FUNCIONAL PARA MOSTRAR REGISTROS
Route::post('/albumesFav', 'App\Http\Controllers\AlbumFavoritoController@store');       //YA FUNCIONAL PARA INSERTAR REGISTROS
Route::put('/albumesFav/{id}', 'App\Http\Controllers\AlbumFavoritoController@update');  //YA FUNCIONAL PARA ACTUALIZAR REGISTROS
Route::delete('/albumesFav/{id}', 'App\Http\Controllers\AlbumFavoritoController@destroy');//YA FUNCIONAL PARA ELIMINAR REGISTROS


//RUTAS PARA CANCIONES EN LAS PLAYLIST
Route::get('/cancionesPlay', 'App\Http\Controllers\CancionesPlaylistController@index'); //YA FUNCIONAL PARA MOSTRAR REGISTROS
Route::post('/cancionesPlay', 'App\Http\Controllers\CancionesPlaylistController@store');//YA FUNCIONAL PARA INSERTAR REGISTROS
Route::put('/cancionesPlay/{id}', 'App\Http\Controllers\CancionesPlaylistController@update');//YA FUNCIONAL PARA ACTUALIZAR REGISTROS
Route::delete('/cancionesPlay/{id}', 'App\Http\Controllers\CancionesPlaylistController@destroy');//YA FUNCIONAL PARA ELIMINAR REGISTROS


//RUTAS PARA LOS GENEROS MUSICALES
Route::get('/generos', 'App\Http\Controllers\GeneroController@index');                  //YA FUNCIONAL PARA MOSTRAR REGISTROS
Route::post('/generos', 'App\Http\Controllers\GeneroController@store');                 //YA FUNCIONAL PARA INSERTAR REGISTROS
Route::put('/generos/{id}', 'App\Http\Controllers\GeneroController@update');            //YA FUNCIONAL PARA ACTUALIZAR REGISTROS
Route::delete('/generos/{id}', 'App\Http\Controllers\GeneroController@destroy');        //YA FUNCIONAL PARA ELIMINAR REGISTROS
