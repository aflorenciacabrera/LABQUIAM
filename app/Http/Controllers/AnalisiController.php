<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;
use labquiam\muestra;
use labquiam\analisi;

use \stdClass;
class AnalisiController extends Controller
{
    //
    public function seleccionTecnica (){
       $muestras = muestra::all();
       $analisis = analisi::all();
        return view('analisis.analisisTecnicas')->with('muestras',$muestras) ->with('analisis',$analisis);
    }

    // public function aguaPotable (){
    //     return view('analisis.aguaPotable'); 
    // }

    //  public function aguaEstancada (){
    //     return view('analisis.aguaEstancada'); 
    // }
    // public function determinaciones (){
    //     return view('analisis.determinaciones'); 
    // }
    // public function resultados (){
    //     return view('analisis.resultados'); 
    // }

    public function crearAnalisis (Request $request)
      {     
      $a = new analisi; //Creo nuevo analisis
      $a->categoria= $request->categoria;
      $a->muestra_id= $request->muestra_id;
      $a->determinacion= $request->determinacion;
      $a->estado= $request->estado;
      $datos = new stdClass();//creo objeto vacio
                //Para diferenciad las determinaciones 
                switch ($request->determincacion) {
                    case 'alcanididad':
                        $datos->volumen_gastado = $request->volumen_gastado;
                        $datos->factor = $request->factor;
                        $datos->volumen_calculado = $request->volumen_calculado;
                        $datos->botella=$request->botella;
                        $datos->variable=$request->variable;
                        $datos->resultado = ($request->volumen_calculado * $request->variable * 10);
                        $a->datos = json_encode((array)$datos);//objeto a texto
                        $a->save();
                    break;
                    case 'amonio ':
                        $datos->absrobancia = $request->absrobancia;
                        $datos->factor = $request->factor;
                        $datos->variable=$request->variable;
                        $datos->resultado = ($request->absrobancia * $request->variable * $request->factor);
                        $a->datos = json_encode((array)$datos);//objeto a texto
                        $a->save();
                    break;
                    case 'cloruro':
                        $datos->volumen_gastado = $request->volumen_gastado;
                        $datos->factor = $request->factor;
                        $datos->variable=$request->variable;
                        $datos->volumen_calculado = $request->volumen_calculado;
                        $datos->resultado = (($request->volumen_calculado - 2.0) * $request->variable * 10);
                        $a->datos = json_encode((array)$datos);//objeto a texto
                        $a->save();
                    break;
                    case 'dureza':
                        $datos->volumen_gastado_dureza = $request->volumen_gastado_dureza;
                        $datos->variable=$request->variable;
                        $datos->volumen_gastado = $request->volumen_gastado;
                        $datos->dureza = ($volumen_gastado_dureza* $request->variable * 20);
                        $datos->calcio=($volumen_gastado* $request->variable * 8);
                        $datos->magnesio = (($request->volumen_gastado_dureza - $request->volumen_gastado = $request->volumen_gastado*2.5)*0.243 );
                        $a->datos = json_encode((array)$datos);//objeto a texto
                        $a->save();
                    break;
                     case 'fosfatos ':
                        $datos->absrobancia = $request->absrobancia;
                        $datos->factor = $request->factor;
                        $datos->resultado = (($request->absrobancia / $request->variable) *  $request->factor);
                        $a->datos = json_encode((array)$datos);//objeto a texto
                        $a->save();
                    break;
                     case 'hierro':
                        $datos->absrobancia = $request->absrobancia;
                        $datos->factor = $request->factor;
                        $datos->resultado = (($request->absrobancia / $request->variable) *  $request->factor);
                        $a->datos = json_encode((array)$datos);//objeto a texto
                        $a->save();
                    break;
                    case 'nitrato':
                        $datos->absrobancia = $request->absrobancia;
                        $datos->factor = $request->factor;
                        $datos->resultado = (($request->absrobancia / $request->variable) *  $request->factor);
                        $a->datos = json_encode((array)$datos);//objeto a texto
                        $a->save();
                    break;
                     case 'nitrito':
                        $datos->absrobancia = $request->absrobancia;
                        $datos->factor = $request->factor;
                        $datos->resultado = (($request->absrobancia / $request->variable) *  $request->factor);
                        $a->datos = json_encode((array)$datos);//objeto a texto
                        $a->save();
                    break;
                     case 'oxigeno':
                        $datos->Volumen_frasco = $request->Volumen_frasco;
                        $datos->volumen_gastado = $request->volumen_gastado;
                        $datos->volumen_agregado = $request->volumen_agregado;
                        $datos->resultado = (($request->volumen_gastado * $request->Volumen_frasco) / ($request->Volumen_frasco - $request->volumen_agregado ) );
                        $a->datos = json_encode((array)$datos);//objeto a texto
                        $a->save();
                    break;
                    case 'sulfato':
                        $datos->absrobancia = $request->absrobancia;
                        $datos->factor = $request->factor;
                        $datos->resultado = (($request->absrobancia / $request->variable) *  $request->factor);
                        $a->datos = json_encode((array)$datos);//objeto a texto
                        $a->save();
                    break;
                default:
                        
                    break;
            }

     // return view("institucion.mostrarCapacidad");
      return redirect(url('analisis/tecnica'));
      }
      
      
}
