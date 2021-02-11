<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdministracionController extends Controller
{
    public function getindex() {
        
        return view('home');
    }

    public function getadministracion() {
        
        return view('Administracion.administracion');
    }

 
   
}
