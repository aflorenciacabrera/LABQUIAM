<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;
use labquiam\procedencia;
class ProcedenciaController extends Controller
{
    //

     public function altaPrecedencia () {
     
        return view('muestra.altamuestra');   
    }

    public function crearPrecedencia (Request $request)
      {
        $p = new procedencia; 
      $p->name= $request->name;
      $p->save();
     
    //  return redirect(url('muestra/nuevo'));
      
      }
}
