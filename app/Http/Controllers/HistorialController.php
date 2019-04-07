<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;

class HistorialController extends Controller
{
    //

    public function historial () {
           
            return view('historial.historial_muestra');   
    }
}
