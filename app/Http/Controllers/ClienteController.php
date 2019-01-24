<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;
use labquiam\User;
use labquiam\Role;
class ClienteController extends Controller
{
    //

    public function clienteNuevo(){
        return view('cliente.altaCliente');
    }

    public function listaCliente () {
       
            $cliente = User::where('rol', 'cliente')->take(10)->get();
            return view('cliente.listaCliente', compact('cliente'));
    }

    public function eliminarcliente (Request $request) {

        $user = User::findOrFail($request->id);
        $user->delete();

        return redirect(url('/cliente/lista'))->with('status','El Cliente a sido ELIMINADA definitivamente');
    }
    public function crearCliente (Request $request)
      {
        $c = new user; 

        $c->name= $request->name;
        $c->nomyape= $request->nomyape;
        $c->lugar= $request->lugar;
        $c->trabajo= $request->trabajo;
        $c->observacion= $request->observacion;
        $c->telefono= $request->telefono;
        $c->direccion= $request->direccion;
        $c->email= $request->email;
        $c->rol= $request->rol;
        $c->estado= $request->estado;
        $c->password= bcrypt($request->password);
    //   $c->password_confirmation= bcrypt($request->password_confirmation);
      $c->save();
     // return view("institucion.mostrarCapacidad");
      return redirect(url('inicio'));
      }
}
