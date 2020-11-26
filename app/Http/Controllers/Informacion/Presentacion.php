<?php

namespace App\Http\Controllers\Informacion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Presentacion extends Controller
{
    public function historia(){
        return view('presentacion.historia');
    }
    public function mision(){
        return view('presentacion.mision');
    }
    public function ubicacion(){
    return view('presentacion.ubicacion');
    }
}
