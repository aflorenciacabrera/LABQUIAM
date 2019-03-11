<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;
use labquiam\tipomuestra;
class TipomuestraController extends Controller
{
    //
     public function altaTipoMuestra () {
      $tipomuestras = tipomuestra::all();
        return view('muestra.altamuestra',compact('tipomuestras'));   
    }
    public function crearTipoMuestra (Request $request)
      {
        $tm = new tipomuestra; 
      $tm->name= $request->name;
      $tm->save();
     // return view("institucion.mostrarCapacidad");
      return redirect(url('muestra/tipodemuestra'));
      }
}
