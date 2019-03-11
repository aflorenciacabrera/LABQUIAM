<?php

namespace labquiam\Http\Controllers;
use labquiam\muestra;
use labquiam\procedencia;
use labquiam\tipomuestra;
use labquiam\tipoanalisi;
use Illuminate\Http\Request;

class MuestraController extends Controller {

    public function altaMuestra () {
      $procedencias = procedencia::all();
      $tipoanalisis = tipoanalisi::all();
      // $tipomuestras = tipomuestra::all();
      
      
        return view('muestra.altamuestra', array('procedencias'=>$procedencias),array('tipoanalisis'=>$tipoanalisis) );   
    }

    public function listaMuestra () {
            $muestra =  muestra::all()->take(10);
            return view('muestra.listaMuestra', compact('muestra'));   
    }
    // public function procedencia () {
    //     $array = array(
    //         (object) array(
    //             'id' => 1,
    //             'procedencia' => 'prodecencia 1',
    //         ),
    //         (object) array(
    //             'id' => 2,
    //             'procedencia' => 'prodecencia 2',
    //         ),
    //         (object) array(
    //             'id' => 3,
    //             'procedencia' => 'prodecencia 3',
    //         ),
    //     );
    //     // dd($array);
    //     return view('muestra.procedencia', [
    //         'procedencias' => $array
    //     ]);
    // }

    // public function tipoDeMuestra () {
    //     $array = array(
    //         (object) array(
    //             'id' => 1,
    //             'tipo_de_muestra' => 'tipo de muestra 1',
    //         ),
    //         (object) array(
    //             'id' => 2,
    //             'tipo_de_muestra' => 'tipo de muestra 2',
    //         ),
    //         (object) array(
    //             'id' => 3,
    //             'tipo_de_muestra' => 'tipo de muestra 3',
    //         ),
    //     );
    //     return view('muestra.tipodemuestra', [
    //         'tipos_de_muestras' => $array
    //     ]);
    // }

    // public function tipoDeAnalisis () {
    //     $array = array(
    //         (object) array(
    //             'id' => 1,
    //             'tipo_de_analisis' => 'tipo de analisis 1',
    //         ),
    //         (object) array(
    //             'id' => 2,
    //             'tipo_de_analisis' => 'tipo de analisis 2',
    //         ),
    //         (object) array(
    //             'id' => 3,
    //             'tipo_de_analisis' => 'tipo de analisis 3',
    //         ),
    //     );
    //     return view('muestra.tipodeanalisis', [
    //         'tipos_de_analisis' => $array
    //     ]);
    // }


    public function crearMuestra (Request $request)
      {
        $m = new muestra; 

      $m->fecha_ingreso= $request->fecha_ingreso;
      $m->fecha_toma_muestra= $request->fecha_toma_muestra;
      $m->procedencia= $request->procedencia;
      $m->tipo_muestra= $request->tipo_muestra;
      $m->remitida_tomada= $request->remitida_tomada;
      $m->tipo_analisis= $request->tipo_analisis;
      $m->descripcion= $request->descripcion;
      $m->detalles= $request->detalles;
      $m->save();
     // return view("institucion.mostrarCapacidad");
      return redirect(url('inicio'));
      }

      

     
      
       

    //    public function procedencia () {
    //     return view('muestra.altamuestra');
    // }
    //  public function tipoDeAnalisis () {
    //     return view('muestra.altamuestra');
    // }
    // public function tipoDeMuestra () {
    //     return view('muestra.altamuestra');
    // }
}
