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
Route::get('/', function () {
    return view('welcome');
});
Route::get('autenticar', function() {
    return view('autenticar'); 
    //buscara el archivo 'autenticar.php' o 'autenticar.blade.php' dentro de resoureces/views
});
Route::get('tablero', function() {
    return view('supervisor.dasboar');
    //buscara el archivo 'tablero.php' o 'tablero.blade.php' dentro de resoureces/views/supervisor
});

//Route::get('dash',function(){
    
//});

Route::get('revisar', function() {
    return view('encargado.revisar'); 
});
Route::get('cuenta', function() {
    return view('cliente.cuenta'); 
});
Route::post('validar'        , 'AutenticarControler@validar');
Route::get('listar_por_categoria/{categoria_id}','BuscarControler@listar_por');



Route::get('Categorias','CategoriasControler@index');
//Route::post('Categorias','CategoriasControler@store');
Route::get('Categorias/create','CategoriasControler@create');
Route::get('Categorias/{categoria}','CategoriasControler@show');
//Route::put('Categorias/{categoria}','CategoriasControler@update');
//Route::delete('Categorias/{categoria}','CategoriasControler@destroy');
Route::get('Categorias/{categoria}/edit','CategoriasControler@edit');
//Route::resource('Categorias','CategoriasControler');






