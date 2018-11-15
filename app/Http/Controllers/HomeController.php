<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     protected function guard()
     {
      return Auth::guard('user');
     }
    // public function index(Request $request)
    // {
    //     $request->user()->authorizeRoles(['user', 'admin']);
    //     return view('home');
    // }

     public function inicio(){
      // return view('admin.inicio');
      if(Auth::user()->hasRole('admin')){
         
          return view('admin.inicio');
       }
        if(Auth::user()->hasRole('cliente')){
         
          return view('cliente.inicio');
       }
       if(Auth::user()->hasRole('usuario')){
         
          return view('usuario.inicio');
       }
      
    }
    /*
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles(‘admin’);
        return view(‘some.view’);
    }
    */

     public function perfil(){
        if(Auth::user()->hasRole('admin')){
            return view('perfil');
       }
              
        if(Auth::user()->hasRole('usuario')){
          return view('perfil');
        }
        

        if(Auth::user()->hasRole('cliente')){
            return view('perfil');
        }
       
    }

}
