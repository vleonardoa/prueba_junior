<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fase3Controller extends Controller
{
    public function Nivel1()
    {
        return view('fase3.nivel1');
    }
    public function Nivel2()
    {
        return view('fase3.nivel2');
    }
    public function Nivel3()
    {
        return view('fase3.nivel3');
    }
}
