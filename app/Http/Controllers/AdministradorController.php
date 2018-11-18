<?php

namespace labquiam\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use labquiam\User;
use labquiam\Role;

class AdministradorController extends Controller
{
    //


   
    
     public function tecnico(){
      return view('admin.altatecnico');
    }


    

   
    public function altaUsuario(){
        
    }
}
