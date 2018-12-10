<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;
use labquiam\User;
use labquiam\Role;

class TecnicoController extends Controller
{
    //
     public function tecnicoNuevo(){
        return view('tecnico.altaTecnico');
    }
     public function listaTecnico () {
       
            $tecnico = User::where('rol', 'tecnico')->take(10)->get();
            return view('admin.listaTecnico', compact('tecnico'));
        
    }
}
