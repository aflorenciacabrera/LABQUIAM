<?php

namespace labquiam\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use labquiam\User;
use labquiam\Role;

class AdministradorController extends Controller
{
    //


   
    
     public function usuario(){
      return view('admin.altaUsuario');
    }


    

   
    public function altaUsuario(){
        
    }
}
