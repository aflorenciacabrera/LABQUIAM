<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;
use labquiam\muestra;
use labquiam\determinacion;
class HistorialController extends Controller
{
    //

    public function historial () {
            $muestra =  muestra::all();
            $determinacion = determinacion::all();

            return view('historial.historial_muestra')->with('determinacion',$determinacion)->with('muestra',$muestra);   
    }
}
