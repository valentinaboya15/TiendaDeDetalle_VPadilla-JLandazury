<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Factura;

class FacturacionController extends Controller
{
    public function facturacion() {
        $Factura= DB::table('factura as fact')
        ->join('producto as pro', 'fact.id_pro', '=', 'pro.id_pro')
        ->join('cliente as cli', 'factura.id_cli', '=', 'cli.id_cli')
     
        ->select('fact.id_car','pro.Descripcion','cli.nombre','fact.formaPago','fact.Fecha','fact.Total')
        ->get();
        return view('facturacion.facturacion',['factura'=>$Factura]);
    }
    public function getfactura() {
        
        return view('facturacion.factura');
    }
    
    public function pagoCarrito(Request $request) {

        $Factura = new Factura();
        $Factura->id_car = $request->input('id_car');
        $Factura->id_pro = $request->input('id_pro');
        $Factura->id_cli = $request->input('id_cli');
        $Factura->formaPago = $request->input('formaPago');
        $Factura->Fecha= $request->input('Fecha');
        $Factura->Total = $request->input('Total');
        $Factura->save();
        return view('facturacion.pagar');
    }
}
