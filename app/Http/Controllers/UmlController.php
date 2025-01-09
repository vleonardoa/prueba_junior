<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmlController extends Controller
{
    public function index()
    {
        return view('uml.index');
    }
}
