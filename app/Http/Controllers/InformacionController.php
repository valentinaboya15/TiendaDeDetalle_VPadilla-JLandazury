<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InformacionController extends Controller
{
    public function getnosotros() {
        
        return view('informacion.nosotros');
    }

    public function getmision() {
        
        return view('informacion.mision');
    }

    public function getubicacion() {
        
        return view('informacion.ubicacion');
    }

    public function getcontactos() {
        
        return view('contactos');
    }

    public function getPQR() {
        
        return view('PQR');
    }

   
}
