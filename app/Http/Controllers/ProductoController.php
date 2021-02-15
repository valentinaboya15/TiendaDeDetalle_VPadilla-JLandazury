<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function listadoProducto() {
        $Producto= DB::table('producto as pro')
        ->join('detalle as det', 'pro.id_det', '=', 'det.id_det')
        ->join('categoria as cate', 'pro.id_cate', '=', 'cate.id_cate')
        ->select('pro.id','cate.nombre','pro.id_cata','pro.Descripcion','pro.cant_prod','pro.foto','det.Precio')
        ->get();
        
        return view('Productos.listado_producto',['producto'=>$Producto]);
    }

    public function registroProducto() {
      
        return view('Productos.registro');
    }

    public function registrarProducto(Request $request) {

        $Producto = new Producto();
        $Producto->id_cate = $request->input('id_cate');
        $Producto->id_cata = $request->input('id_cata');
        $Producto->Descripcion = $request->input('Descripcion');
        $Producto->cant_prod= $request->input('cant_prod');
        $Producto->foto = $request->input('foto');
        $Producto->id_det = $request->input('id_det');
        $Producto->save();
        return view('Productos.registrar');
    }

    public function form_actualizarPro($id){

        $producto=Producto::findOrFail($id);
        $categoria=Categoria::all();
        return view('Productos.actualizarPro',compact('producto','categoria')) ;
    }
   public function pro_actualizado(Request $request, $id){
        
        $Product=Producto::findOrFail($id);
        $Product->id_cate = $request->input('id_cate');
        $Product->id_cata = $request->input('id_cata');
        $Product->Descripcion = $request->input('Descripcion');
        $Product->cant_prod= $request->input('cant_prod');
        $Product->foto = $request->input('foto');
        $Product->id_det = $request->input('id_det');
        $Product->save();
        return view('Productos.actualizadoPro');
    }
}
