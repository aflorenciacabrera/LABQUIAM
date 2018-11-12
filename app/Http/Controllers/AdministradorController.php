<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    //
    public function inicio(){
      return view('admin.inicio');
    }
     public function usuario(){
      return view('admin.altaUsuario');
    }
}
