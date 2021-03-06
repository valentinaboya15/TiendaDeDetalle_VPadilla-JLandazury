<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Carrito;

class CarritoController extends Controller
{
    
    public function listadoCarrito() {
        $Carrito= DB::table('carrito as cart')
        ->join('producto as pro', 'cart.id', '=', 'pro.id')
        ->join('detalle as det', 'pro.id_det', '=', 'det.id_det')
        ->join('categoria as cate', 'pro.id_cate', '=', 'cate.id_cate')
        ->select('cart.id','cate.nombre','pro.id_cata','cart.Descripcion','cart.cant_prod','cart.foto','det.Precio')
      
        ->get();
        return view('carrito.carro',['carrito'=>$Carrito]);
    }

    public function registroCarrito() {
       
        return view('carrito.registroCarrito');
    }

    public function registrarCart(Request $request) {

        $Carrito = new Carrito();
        $Carrito->id_cli = $request->input('id_cli');
        $Carrito->id_pro = $request->input('id_pro');
        $Carrito->id_det = $request->input('id_det');
        $Carrito->Descripcion = $request->input('Descripcion');
        $Carrito->cant_prod= $request->input('cant_prod');
        $Carrito->foto = $request->input('foto');
        $Carrito->save();
        return view('carrito.registrar');
    }

  public function eliminarCart($id){
        $carrito=Carrito::findOrFail($id);
        $carrito->delete();
        return view('carrito.eliminar');
    }

  
  
}
