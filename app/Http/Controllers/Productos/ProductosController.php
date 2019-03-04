<?php

namespace App\Http\Controllers\Productos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

use App\Models\Usuario;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Producto;


use DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       /*  

        ->join('<tabla_que_se_va_a_unir>', '<tabla_relacionada>.<campo_id>','=','<tabla_a_unir>.id')

        */ 


        $productos = Producto::select('productos.*', 'marcas.name as marca_nombre', 'modelos.name as modelo_nombre', 'usuarios.name as usuario_nombre')
                        ->join('marcas', 'productos.marca_id', '=' ,'marcas.id')
                        ->join('modelos', 'productos.modelo_id', '=' ,'modelos.id')
                        ->join('usuarios', 'productos.personaElaboro_id','=','usuarios.id')
                        ->orderBy('estado','desc')
                        ->get();

                        
        return view('productos.show', ['productos'=>$productos]);

    
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create', ['usuarios'=>Usuario::get(), 'modelos'=>Modelo::get(), 'marcas'=>Marca::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
      /*  dd( $request->filled('estado')); */
       
        DB::beginTransaction();
       
        try {
            
            $producto = new Producto;
            $producto->fill($data);
            $producto->estado = $request->filled('estado');
            $producto->save();
            //dd($producto);
            
            DB::commit();
            return redirect()->route('productos.index');

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('productos.create');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $producto = Producto::select('productos.*','marcas.name as marca_nombre', 'modelos.name as modelo_nombre', 'usuarios.name as usuario_nombre')
                    ->join('marcas', 'productos.marca_id', '=' ,'marcas.id')
                    ->join('modelos', 'productos.modelo_id', '=' ,'modelos.id')
                    ->join('usuarios', 'productos.personaElaboro_id','=','usuarios.id')
                    ->get()->find($id);


                    return view('productos.showWatch', ['producto'=>$producto]); 


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::select('productos.*','marcas.name as marca_nombre', 'modelos.name as modelo_nombre', 'usuarios.name as usuario_nombre')
                            ->join('marcas', 'productos.marca_id', '=' ,'marcas.id')
                            ->join('modelos', 'productos.modelo_id', '=' ,'modelos.id')
                            ->join('usuarios', 'productos.personaElaboro_id','=','usuarios.id')
                            ->get()->find($id);


        return view('productos.edit', ['producto' => $producto,'usuarios'=>Usuario::get(), 'modelos'=>Modelo::get(), 'marcas'=>Marca::get()]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        try {
            $producto = Producto::find($id);
            $producto->fill($data);
            $producto->estado = $rehquest->filled('estado');
            $producto->update();
            return redirect()->route('productos.index');
            

        } catch (\Exception $e) {
            //throw $th;
        }
        return '<h1 style="font-family:arial;color:red">
                    Lo Sentimos 😓 Ha Ocurrido un Error al intentar Guardar
                    En la Base de Datos.
                </h1>';
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $producto = Producto::find($id);
         $producto->delete();
         Session::flash('message', "Registro Eliminado" );
         return back();


    }
    public function consultas()
    {
        return 'Activos';

        // switch ($identificador) {
        //     case '1':
        //         return 'Primero los activos';
        //         break;
            
        //     case '1':
        //         return 'Primero los activos';
        //          break;
            
        //     default:
        //         return 'error';
        //         break;
        // }

    }
}

