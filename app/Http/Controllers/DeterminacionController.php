<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;
use labquiam\muestra;
use labquiam\determinacion;
use \stdClass;
class DeterminacionController extends Controller
{
    //
     public function altaTecnica () {
    
       $muestras = muestra::all();
      
        return view('analisis.determinaciones')->with('muestras',$muestras);   
    }
    

   public function crearTecnica (Request $request)
      {
        $d = new determinacion; 

      $d->categoria= $request->categoria;
      $d->muestra_id= $request->muestra_id;
      $d->determinacion= $request->determinacion;
      $d->estado= $request->estado;
    //   $d->datos=$request->datos;
      $datos = new stdClass();//creo objeto vacio
                //Para diferenciad las determinaciones 
                switch ($request->determinacion) {
                    case 'alcanididad':
                        $datos->volumen_gastado = $request->volumen_gastado;
                        $datos->factor = $request->factor;
                        $datos->volumen_calculado = $request->volumen_calculado;
                        $datos->botella=$request->botella;
                        $datos->variable=$request->variable;
                        $datos->resultado = ($request->volumen_calculado * $request->variable * 10);
                        $d->datos = json_encode((array)$datos);//objeto a texto
                        $d->save();
                    break;
                    case 'amonio':
                        $datos->absrobancia = $request->absrobancia;
                        $datos->factor = $request->factor;
                        $datos->variable=$request->variable;
                        $datos->resultado = ($request->absrobancia * $request->variable * $request->factor);
                        $d->datos = json_encode((array)$datos);//objeto a texto
                        $d->save();
                    break;
                    case 'cloruro':
                        $datos->volumen_gastado = $request->volumen_gastado;
                        $datos->factor = $request->factor;
                        $datos->variable=$request->variable;
                        $datos->volumen_calculado = $request->volumen_calculado;
                        $datos->resultado = (($request->volumen_calculado - 2.0) * $request->variable * 10);
                        $d->datos = json_encode((array)$datos);//objeto a texto
                        $d->save();
                    break;
                    case 'dureza':
                        $datos->volumen_dureza = $request->volumen_gastado_dureza;
                        $datos->variable=$request->variable;
                        $datos->volumen_gastado = $request->volumen_gastado;
                        $datos->dureza = (($request->volumen_dureza * $request->variable) * 20);
                        $datos->calcio=(($request->volumen_gastado * $request->variable) * 8);
                        $datos->magnesio = (($request->volumen_dureza - $request->volumen_gastado = $request->volumen_gastado*2.5)*0.243 );
                        $d->datos = json_encode((array)$datos);//objeto a texto
                        $d->save();
                    break;
                     case 'fosfatos':
                        $datos->absrobancia = $request->absrobancia;
                        $datos->factor = $request->factor;
                        $datos->resultado = (($request->absrobancia / $request->variable) *  $request->factor);
                        $d->datos = json_encode((array)$datos);//objeto a texto
                        $d->save();
                    break;
                     case 'hierro':
                        $datos->absrobancia = $request->absrobancia;
                        $datos->factor = $request->factor;
                        $datos->resultado = (($request->absrobancia / $request->variable) *  $request->factor);
                        $d->datos = json_encode((array)$datos);//objeto a texto
                        $d->save();
                    break;
                    case 'nitrato':
                        $datos->absrobancia = $request->absrobancia;
                        $datos->factor = $request->factor;
                        $datos->resultado = (($request->absrobancia / $request->variable) *  $request->factor);
                        $d->datos = json_encode((array)$datos);//objeto a texto
                        $d->save();
                    break;
                     case 'nitrito':
                        $datos->absrobancia = $request->absrobancia;
                        $datos->factor = $request->factor;
                        $datos->resultado = (($request->absrobancia / $request->variable) *  $request->factor);
                        $d->datos = json_encode((array)$datos);//objeto a texto
                        $d->save();
                    break;
                     case 'oxigeno':
                        $datos->Volumen_frasco = $request->Volumen_frasco;
                        $datos->volumen_gastado = $request->volumen_gastado;
                        $datos->volumen_agregado = $request->volumen_agregado;
                        $datos->resultado = (($request->volumen_gastado * $request->Volumen_frasco) / ($request->Volumen_frasco - $request->volumen_agregado ) );
                        $d->datos = json_encode((array)$datos);//objeto a texto
                        $d->save();
                    break;
                    case 'sulfato':
                        $datos->absrobancia = $request->absrobancia;
                        $datos->factor = $request->factor;
                        $datos->resultado = (($request->absrobancia / $request->variable) *  $request->factor);
                        $d->datos = json_encode((array)$datos);//objeto a texto
                        $d->save();
                    break;
                default:
                        echo "no enro";
                        print_r($request->determinacion);
                        return  ;
                    break;
            }
        $d->save();
      return redirect(url('analisis/determinacion'));
      }
}
