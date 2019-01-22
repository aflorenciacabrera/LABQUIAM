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
            return view('tecnico.listaTecnico', compact('tecnico'));
    }
    public function eliminartecnico (Request $request) {

        $user = User::findOrFail($request->id);
        $user->delete();

        return redirect(url('/tecnico/lista'))->with('status','El Técnico a sido ELIMINADA definitivamente');
    }
}
