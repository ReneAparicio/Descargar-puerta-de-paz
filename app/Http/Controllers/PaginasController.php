<?php

namespace App\Http\Controllers;

use App\Models\Programa;  

class PaginasController extends Controller
{
    public function ministerios()
    {
        return view('ministerios');
    }

    public function eventos()
    {
        return view('eventos');
    }

    public function predicas()
    {
        return view('predicas');
    }


public function programas()
{
    $programas = Programa::all();
    return view('programas', compact('programas'));
}

    public function contacto()
    {
        return view('contacto');
    }
}