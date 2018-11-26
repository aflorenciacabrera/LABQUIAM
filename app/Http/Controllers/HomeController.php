<?php

namespace labquiam\Http\Controllers;
use labquiam\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct () {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    protected function guard () {
        return Auth::guard('user');
    }
    // public function index(Request $request)
    // {
    //     $request->user()->authorizeRoles(['user', 'admin']);
    //     return view('home');
    // }


    public function inicio () {
      // return view('admin.inicio');
        if (Auth::user()->hasRole('admin')) {
            $tecnico = User::where('rol', 'tecnico')->take(10)->get();
            $cliente = User::where('rol', 'cliente')->take(10)->get();
            return view('admin.inicio', compact('tecnico'), compact('cliente'));
        }
        if (Auth::user()->hasRole('cliente')) {
            $users = User::where('rol', 'cliente')->take(10)->get();
            return view('cliente.inicio', compact('users'));
        }
        if (Auth::user()->hasRole('tecnico')) {
            $users = User::where('rol', 'cliente')->take(10)->get();
            return view('tecnico.inicio', compact('users'));
        }
    }
    /*
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles(‘admin’);
        return view(‘some.view’);
    }
    */
    public function home () {
        return view('home');
    }

    public function perfil () {
        if (Auth::user()->hasRole('admin')) {
            return view('perfil');
        }
        if (Auth::user()->hasRole('tecnico')) {
            return view('perfil');
        }
        if (Auth::user()->hasRole('cliente')) {
            return view('perfil');
        }
    }

    public function editarPerfil (Request $request) {
        $user = User::findOrFail($request->id);
        $user->name = $request->name;
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->telefono = $request->telefono;
        $user->especialidad = $request->especialidad;
        $user->save();
        // return view("institucion.mostrarCapacidad");
        return redirect(url('/perfil'));
    }

    public function update_avatar (Request $request) {
        // Handle the user upload of avatar
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/cargas/avatars/'.$filename ));

            $user =Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return redirect(url('/perfil'));
    }

    public function eliminarPerfil (Request $request) {
        $user = User::findOrFail($request->id);
        $user->delete();

        return redirect(url('/'))->with('status','Tu cuenta a sido ELIMINADA');
    }

    public function activar ($tipo,$user) {
        if ($tipo == 'tecnico'){
            $user = User::findOrFail($user);
        }
        if ($tipo == 'cliente') {
            $user = User::findOrFail($user);
        }
        $user->estado = 1;
        $user->save();
        return back()->with('activado','Usuario '.$user->name .' activado');
    }

    public function suspender ($tipo,$user) {
        if ($tipo == 'tecnico') {
            $user = User::findOrFail($user);
        }
        if ($tipo == 'cliente') {
            $user = User::findOrFail($user);
        }
        $user->estado = 0;
        $user->save();
        return back()->with('suspendido','Usuario ' . $user->name . ' suspendido');
    }
}
