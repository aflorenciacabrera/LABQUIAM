<?php

namespace labquiam\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use labquiam\User;
use labquiam\Role;

class AdministradorController extends Controller {

   
    public function cliente(){
        return view('admin.altaCliente');
    }

    public function eliminarcuenta (Request $request) {

        $user = User::findOrFail($request->id);
        $user->delete();

        return redirect(url('/inicio'))->with('status','El usuario a sido ELIMINADA definitivamente');
    }

    public function altaUsuario () {

    }
    
     public function listaCliente () {
       
            $cliente = User::where('rol', 'cliente')->take(10)->get();
            return view('admin.listaCliente', compact('cliente'));
       
        
    }
}
