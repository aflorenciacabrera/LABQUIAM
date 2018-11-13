<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;
use labquiam\User;
use labquiam\Role;

class AdministradorController extends Controller
{
    //
public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio(){
      return view('admin.inicio');
    }
     public function usuario(){
      return view('admin.altaUsuario');
    }


    

   
    public function altaUsuario(){
        
    }
}
