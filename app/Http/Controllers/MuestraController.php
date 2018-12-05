<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;

class MuestraController extends Controller {
    public function altaMuestra () {
        return view('muestra.altamuestra');
    }
    public function procedencia () {
        $array = array(
            (object) array(
                'id' => 1,
                'procedencia' => 'prodecencia 1',
            ),
            (object) array(
                'id' => 2,
                'procedencia' => 'prodecencia 2',
            ),
            (object) array(
                'id' => 3,
                'procedencia' => 'prodecencia 3',
            ),
        );
        // dd($array);
        return view('muestra.procedencia', [
            'procedencias' => $array
        ]);
    }

    public function tipoDeMuestra () {
        $array = array(
            (object) array(
                'id' => 1,
                'tipo_de_muestra' => 'tipo de muestra 1',
            ),
            (object) array(
                'id' => 2,
                'tipo_de_muestra' => 'tipo de muestra 2',
            ),
            (object) array(
                'id' => 3,
                'tipo_de_muestra' => 'tipo de muestra 3',
            ),
        );
        return view('muestra.tipodemuestra', [
            'tipos_de_muestras' => $array
        ]);
    }

    public function tipoDeAnalisis () {
        $array = array(
            (object) array(
                'id' => 1,
                'tipo_de_analisis' => 'tipo de analisis 1',
            ),
            (object) array(
                'id' => 2,
                'tipo_de_analisis' => 'tipo de analisis 2',
            ),
            (object) array(
                'id' => 3,
                'tipo_de_analisis' => 'tipo de analisis 3',
            ),
        );
        return view('muestra.tipodeanalisis', [
            'tipos_de_analisis' => $array
        ]);
    }
}
