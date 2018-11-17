<?php

namespace labquiam\Http\Controllers;
use labquiam\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
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

    public function editarPerfil(Request $request)
      {
        $user =User::findOrFail($request->id);  
        $user->name= $request->name;
        $user->nombre= $request->nombre;
        $user->apellido= $request->apellido;
        $user->telefono= $request->telefono;
        $user->especialidad= $request->especialidad;
        $user->save();

       // return view("institucion.mostrarCapacidad");
        return redirect(url('/perfil'));
   
      }

       public function update_avatar(Request $request){
      // Handle the user upload of avatar
      if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save( public_path('/cargas/avatars/'.$filename ) );

        $user =Auth::user();
        $user->avatar = $filename;
        $user->save();
      }
      return redirect(url('/perfil'));

    }


}
