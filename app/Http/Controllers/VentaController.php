<?php

namespace App\Http\Controllers;

use App\venta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    //

    public function create(){
        return view('Venta.create');
    }

        public function insertar(){

        }
        public function index(){

            
            $datos = DB::table('venta')->get();
            return view('/venta/index',['datos'=>$datos]);

            
        }


    public function store(Request $request)
    {
       
        $datosventa= request()->except('_token');
             venta::insert($datosventa);
        
        return Redirect::to('/venta/index')->with('Mensaje','venta agregado con exito');


    }


    public function eliminar($id){
        $ventaeli = venta::findOrFail($id);
        $ventaeli->delete();
       return Redirect::to('/venta/index')->with('Mensaje','venta eliminado con exito');
    }

   


    public function editar($id){
        $venta= venta::findOrFail($id);
        return view('/venta/edit',compact('venta'));
    }


    public function actualizar(Request $request, $id){
    $ventas= request()->except(['_token','_method']);
        venta::where('id',"=",$id)->update($ventas);
        return Redirect::to('/venta/index')->with('Mensaje','venta modificado con exito');
    }
}
