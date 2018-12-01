<?php

namespace labquiam\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use labquiam\User;
use labquiam\Role;

class AdministradorController extends Controller {

    public function tecnico(){
        return view('admin.altatecnico');
    }

    public function eliminarcuenta (Request $request) {

        $user = User::findOrFail($request->id);
        $user->delete();

        return redirect(url('/inicio'))->with('status','El usuario a sido ELIMINADA definitivamente');
    }

    public function altaUsuario () {

    }
     public function listaTecnico () {
       
            $tecnico = User::where('rol', 'tecnico')->take(10)->get();
            return view('admin.listaTecnico', compact('tecnico'));
        
    }
     public function listaCliente () {
       
            $cliente = User::where('rol', 'cliente')->take(10)->get();
            return view('admin.listaCliente', compact('cliente'));
       
        
    }
}
