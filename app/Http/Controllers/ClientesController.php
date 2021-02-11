<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function index(){
        // Consultar clientes con Eloquent
        $Usuario = Cliente::all();   
        return view('clientes.listado',['usuarios' => $Usuario] );
    }

    public function getclientes() {
        
        $Usuario= DB::table('usuarios')
        ->get();
        return view('clientes.visualizar.cliente',['usuarios'=>$Usuario]);
    }

    public function form_registro(){
        return view('clientes.registro') ;
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

    
    public function actualizar(){
        return view('clientes.form_actualiza') ;
    }

    public function eliminar(){
        return view('clientes.eliminar') ;
    }
}
