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
        return view('muestra.tipodemuestra');
    }
    public function tipoDeAnalisis () {
        return view('muestra.tipodeanalisis');
    }
}
