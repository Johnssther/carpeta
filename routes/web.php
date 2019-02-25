<?php



Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::group(['middleware'=>'auth'], function() {

    
    Route::resource ('usuarios','Productos\UsuariosController'); //USUARIOS
    Route::resource ('marcas', 'Productos\MarcasController'); //MARCAS
    Route::resource ('modelos', 'Productos\ModelosController');  //MODELOS
    Route::resource ('productos', 'Productos\ProductosController');//PRODUCTOS

    Route::get ('pdf', 'PdfController@Generate_pdf')->name('pdf.generate');     //ME REDIRIGE AL CONTROLADOR DE GENERATE PDF

    //PDF GENERATE
    Route::get ('pdfgmarcas', 'PdfController@Generate_pdf_marcas')->name('pdf.generate.marcas');     //ME REDIRIGE AL CONTROLADOR DE GENERATE PDF
    Route::get ('pdfgmodelos', 'PdfController@Generate_pdf_modelos')->name('pdf.generate.modelos');
    Route::get ('pdfgusuarios', 'PdfController@Generate_pdf_usuarios')->name('pdf.generate.usuarios');
    Route::get ('pdfgproductos', 'PdfController@Generate_pdf_productos')->name('pdf.generate.productos');


});
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
