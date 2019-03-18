<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;
use labquiam\muestra;
use labquiam\analisi;
class AnalisiController extends Controller
{
    //

    public function seleccionTecnica (){
       $muestras = muestra::all();
       $analisis = analisi::all();
        return view('analisis.analisisTecnicas')->with('muestras',$muestras) ->with('analisis',$analisis);
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

    public function crearAnalisis (Request $request)
      {
        $a = new analisi; 
 
        $a->categoria= $request->categoria;
      $a->determinacion= $request->determinacion;
      $a->botella= $request->botella;
      $a->volumen_gastado= $request->volumen_gastado;
      $a->factor_dilucion= $request->factor_dilucion;
      $a->volumen_calculado= $request->volumen_calculado;
      $a->resultado= $request->resultado;
      $a->estado= $request->estado;
      $a->save();
     // return view("institucion.mostrarCapacidad");
      return redirect(url('analisis/tecnica'));
      }
}
