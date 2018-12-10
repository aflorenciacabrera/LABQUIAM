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
            return view('admin.listaCliente', compact('cliente'));
       
        
    }
}
