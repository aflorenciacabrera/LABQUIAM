<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;
use labquiam\tipoanalisi;
class TipoanalisiController extends Controller
{
    //

    public function altaTipoAnalisis () {
      $tipoanalisis = tipoanalisi::all();
        return view('muestra.altamuestra',compact('tipoanalisis'));   
    }

     public function crearTipoAnalisis (Request $request)
      {
        $a = new tipoanalisi; 
      $a->name= $request->name;
      $a->save();
     
      // return redirect(url('muestra/nuevo'));
      }
}
