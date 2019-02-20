<?php



Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::resource ('usuarios','Productos\UsuariosController'); //USUARIOS
Route::resource ('marcas', 'Productos\MarcasController'); //MARCAS
Route::resource ('modelos', 'Productos\ModelosController');  //MODELOS
Route::resource ('productos', 'Productos\ProductosController');//PRODUCTOS


 
