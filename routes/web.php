<?php



Route::get('/', function () {
    return view('auth.login');
})->name('home');


Route::group(['middleware'=>'auth'], function() {

    
    Route::resource ('usuarios','Productos\UsuariosController'); //USUARIOS
    Route::resource ('marcas', 'Productos\MarcasController'); //MARCAS
    Route::resource ('modelos', 'Productos\ModelosController');  //MODELOS
    Route::resource ('productos', 'Productos\ProductosController');//PRODUCTOS

    /*
    SOLO ME TRAE UNA RUTA 
    //Route::resource ('marcas', 'Productos\MarcasController', ['only' => 'index']); //MARCAS
    
    EXCEPCIONE DE RUTAS EN EL CONTROLER
    //Route::resource ('productos', 'Productos\ProductosController', ['except' => ['update','destroy']]);//PRODUCTOS
    */

    Route::get ('pdf', 'PdfController@Generate_pdf')->name('pdf.generate');     //ME REDIRIGE AL CONTROLADOR DE GENERATE PDF

    //PDF GENERATE
    Route::get ('pdfgmarcas', 'PdfController@Generate_pdf_marcas')->name('pdf.generate.marcas');     //ME REDIRIGE AL CONTROLADOR DE GENERATE PDF
    Route::get ('pdfgmodelos', 'PdfController@Generate_pdf_modelos')->name('pdf.generate.modelos');
    Route::get ('pdfgusuarios', 'PdfController@Generate_pdf_usuarios')->name('pdf.generate.usuarios');
    Route::get ('pdfgproductos', 'PdfController@Generate_pdf_productos')->name('pdf.generate.productos');

     //EXCEL GENERATE
     Route::get ('excelgmarcas', 'ExcelController@Generate_excel_marcas')->name('excel.generate.marcas');     //ME REDIRIGE AL CONTROLADOR DE GENERATE PDF
     Route::get ('excelgmodelos', 'ExcelController@Generate_excel_modelos')->name('excel.generate.modelos');
     Route::get ('excelgusuarios', 'ExcelController@Generate_excel_usuarios')->name('excel.generate.usuarios');
     Route::get ('excelgproductos', 'ExcelController@Generate_excel_productos')->name('excel.generate.productos');
});
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
