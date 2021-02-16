<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function index(){
        // Consultar clientes con Eloquent
        $Usuario = Cliente::all();   
        return view('clientes.listado',['usuarios' => $Usuario] );
    }

    public function getclientes() {
        $Cliente= DB::table('cliente')
        ->get();
        return view('clientes.visualizar.cliente',['cliente'=>$Cliente]);
    }

    public function form_registro(){
        return view('clientes.registroCli') ;
    }

    public function form_actualizar($id_cli){

        $cliente=Cliente::findOrFail($id_cli);
      
        return view('clientes.actualizar',compact('cliente')) ;
    }
    public function cli_actualizado(Request $request, $id_cli){

        $Cliente=Cliente::findOrFail($id_cli);      
        $Cliente->id_usu= $request->input('id_usu');      
        $Cliente->nombre = $request->input('nombre');
        $Cliente->apellido= $request->input('apellido');
        $Cliente->cedula = $request->input('cedula');
        $Cliente->domicilio = $request->input('domicilio');
        $Cliente->celular = $request->input('celular');
        $Cliente->email = $request->input('email');
        $Cliente->genero = $request->input('genero');
        $Cliente->foto = $request->input('foto');
        $Cliente->save();
        return view('clientes.actualizado');
    }
    


    public function registrarCli(Request $request) {

        $Client = new Cliente();
        $Client->id_usu= $request->input('id_usu');      
        $Client->nombre = $request->input('nombre');
        $Client->apellido= $request->input('apellido');
        $Client->cedula = $request->input('cedula');
        $Client->domicilio = $request->input('domicilio');
        $Client->celular = $request->input('celular');
        $Client->email = $request->input('email');
        $Client->genero = $request->input('genero');
        $Client->foto = $request->input('foto');
        $Client->save();
        return view('clientes.registrarCli');
    }

    
    public function eliminarCli($id_cli){
        $client=Cliente::findOrFail($id_cli);
        $client->delete();
        return view('clientes.eliminarCli');
    }

   
}
