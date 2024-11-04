<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantillaController extends Controller
{
    public function miproyecto(){
        return view('view2.miproyecto');
    }

    public function misperritos(){
        return view('view2.misperritos');
    }

    public function misgatitos(){
        return view('view2.misgatitos');
    }

    public function misconejos (){
        return view('view2.misconejos');
    }

    public function miscanguros (){
        return view('view2.miscanguros');
    }

    public function misdinos (){
        return view('view2.misdinos');
    }

}