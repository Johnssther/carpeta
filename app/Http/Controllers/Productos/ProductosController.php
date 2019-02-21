<?php

namespace App\Http\Controllers\Productos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
                        ->get();

                        //dd($productos);
                        
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
      //  return view('usuarios.create');
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
        return 'ESTOY DESDE EL CONTROLADOR SHOW.PRODUCTOS';
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        
        return view('productos.edit', ['producto' => $producto]);
        return 'id para editar';
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id;
        // $producto = Producto::find($id);
        // $producto->delete();
        // return back();


        /* $category = Category::findOrFail($request->category_id);
        $category->delete();
        return back();
 */
    }
}
