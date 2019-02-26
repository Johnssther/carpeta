<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Usuario;
use App\Models\Producto;
use DB;

use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade as PDF;


class PdfController extends Controller
{
    public function Generate_pdf() {

        ob_start();
        
        include "../resources/views/marcas/example.html";

        $dompdf = new Dompdf();
        $dompdf->loadHtml(ob_get_clean());
        //$dompdf->loadHtmlFile(public_path().'marcas/example.html');
       
        $dompdf->setPaper('A4', 'landscape');

        $dompdf->render();
        $dompdf->stream();
        

    }

    public function Generate_pdf_marcas() {

        $marcas = Marca::all();

        $pdf = \PDF::loadView('pdf_generate.pdfmarcas',['marcas'=>$marcas]);
        return $pdf->download('Marcas.pdf');

    


    }

    public function Generate_pdf_modelos() {

        $modelos = Modelo::all();

        $pdf = \PDF::loadView('pdf_generate.pdfmodelos',['modelos'=>$modelos]);
        return $pdf->download('Modelos.pdf');
    }

    public function Generate_pdf_usuarios() {

        $usuarioscant = DB::table('usuarios')
                                ->select('age', DB::raw('COUNT(*) as cantidad'))
                                ->orderBy('age', 'desc')
                                ->groupBy('age') 
                                ->get();
                               

        $pdf= \PDF::loadView('pdf_generate.pdfusuarios', ['usuarios'=>$usuarioscant]);
        return $pdf->download('Usuarios.pdf');

    }

    public function Generate_pdf_productos() {

       // $productos = Producto::all();
        $productos = Producto::select('productos.*', 'marcas.name as marca_nombre', 'modelos.name as modelo_nombre', 'usuarios.name as usuario_nombre')
                        ->join('marcas', 'productos.marca_id', '=' ,'marcas.id')
                        ->join('modelos', 'productos.modelo_id', '=' ,'modelos.id')
                        ->join('usuarios', 'productos.personaElaboro_id','=','usuarios.id')
                        ->get();
        


        $pdf= \PDF::loadView('pdf_generate.pdfproductos', ['productos'=>$productos])->setPaper('a4', 'landscape');
        return $pdf->download('Productos.pdf');
        return view('pdf_generate.pdfproductos', ['productos'=>$productos]);
        
        // PDF::loadHTML($html)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf')


    }
}

