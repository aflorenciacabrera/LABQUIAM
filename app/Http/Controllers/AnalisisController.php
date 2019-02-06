<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;

class AnalisisController extends Controller
{
    //
    public function seleccionTecnica (){
        return view('analisis.analisisTecnicas');
    }

    public function aguaPotable (){
        return view('analisis.aguaPotable'); 
    }

     public function aguaEstancada (){
        return view('analisis.aguaEstancada'); 
    }
    public function determinaciones (){
        return view('analisis.determinaciones'); 
    }
    public function resultados (){
        return view('analisis.resultados'); 
    }
}
