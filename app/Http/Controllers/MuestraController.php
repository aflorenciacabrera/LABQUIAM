<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;

class MuestraController extends Controller {
    public function altaMuestra () {
        return view('muestra.altamuestra');
    }
}
