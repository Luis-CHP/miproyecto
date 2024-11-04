<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    public function indexm(){
        return view('view1.miprimeravista');
    }

    public function perros(){
        return view('view1.misperritos');
    }

    public function gatos(){
        return view('view1.misgatitos');
    }

    public function conejos (){
        return view('view1.misconejos');
    }

    public function canguros (){
        return view('view1.miscanguros');
    }

    public function dinos (){
        return view('view1.misdinos');
    }
    public function __invoke()
    {
        return view('home');
    }

}
