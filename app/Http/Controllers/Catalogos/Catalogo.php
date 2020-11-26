<?php

namespace App\Http\Controllers\Catalogos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Catalogo extends Controller
{
    public function catalPerro(){
        return view('perro.catalPerro');
    }
    public function catalGato(){
        return view('gatos.catalGato');
    }
}
