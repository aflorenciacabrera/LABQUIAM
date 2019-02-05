<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;

class AnalisisController extends Controller
{
    //
    public function seleccionTecnica (){
        return view('analisis.analisisTecnicas');
       
    }
}
