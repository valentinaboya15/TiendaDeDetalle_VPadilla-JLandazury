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
        return view('clientes.registro') ;
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

        $Usuario = new Cliente();
        $Usuario->id_rol = $request->input('id_rol');
        $Usuario->login = $request->input('login');
        $Usuario->Password = $request->input('Password');
        $Usuario->nombre = $request->input('nombre');
        $Usuario->apellido= $request->input('apellido');
        $Usuario->cedula = $request->input('cedula');
        $Usuario->domicilio = $request->input('domicilio');
        $Usuario->celular = $request->input('celular');
        $Usuario->email = $request->input('email');
        $Usuario->genero = $request->input('genero');
        $Usuario->foto = $request->input('foto');
        $Usuario->save();
        return view('clientes.registrar');
    }

    
   

   
}
