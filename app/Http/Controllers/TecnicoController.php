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

    public function crearTecnico (Request $request)
      {
        $t = new user; 
        $t->name= $request->name;
        $t->nomyape= $request->nomyape;
        $t->lugar= $request->lugar;
        $t->trabajo= $request->trabajo;
        $t->observacion= $request->observacion;
        $t->telefono= $request->telefono;
        $t->direccion= $request->direccion;
        $t->email= $request->email;
        $t->rol= $request->rol;
        $t->estado= $request->estado;
        $t->password= bcrypt($request->password);
    //   $c->password_confirmation= bcrypt($request->password_confirmation);
      $t->save();
     // return view("institucion.mostrarCapacidad");
      return redirect(url('inicio'))->with('status','El usuario técnico fue registrado');
      }
}
