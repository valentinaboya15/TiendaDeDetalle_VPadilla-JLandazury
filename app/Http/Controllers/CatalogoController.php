<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Categoria;
use Database\Seeders\productoSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
   

    public function getdesayunos() {
        $Producto= DB::table('producto as anch')
        ->join('detalle as det', 'anch.id_det', '=', 'det.id_det')
        ->select('anch.foto','det.Tipo','anch.cant_prod','anch.Descripcion','det.Precio')
        ->where('anch.id_cate','=','2')
        ->get();
        return view('catalogo.desayunos',['producto'=>$Producto]);
        
       
    }

    public function getflores() {
        $Producto= DB::table('producto as anch')
        ->join('detalle as det', 'anch.id_det', '=', 'det.id_det')
        ->select('anch.foto','det.Tipo','anch.cant_prod','anch.Descripcion','det.Precio')
        ->where('anch.id_cate','=','3')
        ->get();
        return view('catalogo.flores',['producto'=>$Producto]);
        
      
    }

    public function getfrutales() {
        $Producto= DB::table('producto as anch')
        ->join('detalle as det', 'anch.id_det', '=', 'det.id_det')
        ->select('anch.foto','det.Tipo','anch.cant_prod','anch.Descripcion','det.Precio')
        ->where('anch.id_cate','=','4')
        ->get();
        return view('catalogo.frutales',['producto'=>$Producto]);
        
        
    }

    public function getanchetas() {
        $Producto= DB::table('producto as anch')
        ->join('detalle as det', 'anch.id_det', '=', 'det.id_det')
        ->select('anch.id_pro','anch.foto','det.Tipo','anch.cant_prod','anch.Descripcion','det.Precio')
        ->where('anch.id_cate','=','1')
        ->get();
        return view('catalogo.anchetas',['producto'=>$Producto]);
    }

    public function getcategoria() {
        $Categoria= DB::table('categoria')
        ->get();
        
        return view('categorias.listado',['categoria'=>$Categoria]);
    }

    public function listadoProducto() {
        $Producto= DB::table('producto as pro')
        ->join('detalle as det', 'pro.id_det', '=', 'det.id_det')
        ->join('categoria as cate', 'pro.id_cate', '=', 'cate.id_cate')
        ->select('pro.id_pro','cate.nombre','pro.id_cata','pro.Descripcion','pro.cant_prod','pro.foto','det.Precio')
        ->get();
        
        return view('catalogo.listado_producto',['producto'=>$Producto]);
    }
}
