<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;

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

     public function incio()
    {
       // $request->user()->authorizeRoles(['user', 'admin']);

       if(Auth::user()->hasRole('admin')){
         $users = User::where('rol', 'tecnico')->take(10)->get();
          return view('admin.inicio',compact('users'));
       }
           
        if(Auth::user()->hasRole('user')){
          
        //    $users = User::all()->take(10);

        return view('cliente.inicio', compact('users'));

        }

    }

    /*
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles(‘admin’);
        return view(‘some.view’);
    }
    */

}
