<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- ********************************** Importaciones  ****************************************** --}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'LABQUIAM') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

     
</head>
{{-- ********************************** Navegador  ****************************************** --}}

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            {{--******************** Logo *******************--}}
             <div class="nav-header " >
                <a class="navbar-brand "  href="{{ url('/') }}" ><img src="{{asset('img/quimica.png')}}" width="50" />
                   <font face="  " size="5"> {{ config('app.name', 'Laravel') }}</font><span> : </span> <font face="Britannic Bold" size="5"> <span>Laboratorio de Quimica Ambiental </span></font>
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    {{-- ************************Botones de logeo y registro ************************* --}}
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Acceder') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                @endif
                            </li>
                        @else
                        <div class="container">
                            <div class="row justify-content-center">
                                <nav>
                                    <a href="{{url('/perfil')}}" class="btn  btn-primary "  role ="button" ><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>

                                    <a class="btn  btn-danger active"  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i> {{ __('Salir') }}</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    </form>
                                </nav>
                            </div>
                        </div>
                                    
                                {{--                
                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                              
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{url('/inicio')}}">Inicio</a>
                                    <a class="dropdown-item" href="{{url('/perfil')}}">Perfil</a>

                                     <hr>
                                </div>
 
                                </li> --}}
                                
                        @endguest
                    </ul>
                </div>
            </div>

        </nav>
{{-- **************************************** MENU *********************************************** --}}
   
    @auth
    {{-- **************************************** MENU de Admin *********************************************** --}}
    @if(Auth::user()->hasRole('admin'))
        <div class="container">
            <div class="row justify-content-center">
                <nav>
                        <hr>
                        <a  href="{{url('/inicio')}}"  data-original-title="Inicio"  class="btn  btn-info "  role ="button" > Inicio <i class="glyphicon glyphicon-edit"></i></a>

                        <a data-toggle="collapse" href="#menu2" data-original-title="Tecnico"  class="btn  btn-info "  role ="button" > Técnico <i class="glyphicon glyphicon-edit"></i></a>

                        <a data-toggle="collapse" href="#menu1"  data-original-title="Cliente"  class="btn  btn-info "  role ="button" > Cliente <i class="glyphicon glyphicon-edit"></i></a>

                        <a  data-toggle="collapse" href="#menu"  class="btn  btn-info " role ="button" > Muestra <span class="caret"></span></a>
                           
                        <hr>
                            <div class="collapse menu" class="dropdown-menu dropdown-menu-right"  id="menu">
                                <ul class="list-inline">
                                    <a  class="btn  sm btn-outline-info "  role ="button"  href="{{url('/muestra/altamuestra')}}">Nueva</a></li>
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Solicitudes</a></li>
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Historial</a></li>
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Estado Actual</a></li>
                                </ul>
                            </div>  
                            <div class="collapse menu1" class="dropdown-menu dropdown-menu1-right"  id="menu1">
                                <ul class="list-inline">
                                    <a  class="btn  sm btn-outline-info "  role ="button"  href="{{url('/admin/cliente')}}">Nuevo</a></li>
                                    <a class="btn   btn-outline-info "  role ="button" href="{{url('/lista/tecnico')}}"  >Lista</a></li>     
                                </ul>
                            </div>  
                             <div class="collapse menu2" class="dropdown-menu dropdown-menu2-right"  id="menu2">
                                <ul class="list-inline">
                                    <a  class="btn  sm btn-outline-info "  role ="button"  href="{{url('/admin/tecnico')}}">Nuevo</a></li>
                                    <a class="btn   btn-outline-info "  role ="button"  href="{{url('/lista/cliente')}}"  >Lista</a></li>     
                                </ul>
                            </div>        
                </nav>
            </div>
        </div>
         {{-- **************************************** MENU de Tecnico *********************************************** --}}
    @elseif(Auth::user()->hasRole('tecnico'))
        <div class="container">
            <div class="row justify-content-center">
                <nav>
                        <hr>
                        <a  href="{{url('/inicio')}}"  data-original-title="Inicio"  class="btn  btn-info "  role ="button" > Inicio <i class="glyphicon glyphicon-edit"></i></a>

                        <a data-toggle="collapse" href="#menu4"  data-original-title="Cliente"  class="btn  btn-info "  role ="button" > Cliente <i class="glyphicon glyphicon-edit"></i></a>

                        <a  data-toggle="collapse" href="#menu3"  class="btn  btn-info " role ="button" > Muestra <span class="caret"></span></a>
                           
                        <hr>
                            <div class="collapse menu3" class="dropdown-menu3 dropdown-menu3-right"  id="menu3">
                                <ul class="list-inline">
                                    <a  class="btn  sm btn-outline-info "  role ="button"  href="{{url('/muestra/altamuestra')}}">Nueva</a></li>
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Solicitudes</a></li>
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Historial</a></li>
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Estado Actual</a></li>
                                </ul>
                            </div>  
                            <div class="collapse menu4" class="dropdown-menu4 dropdown-menu4-right"  id="menu4">
                                <ul class="list-inline">
                                    <a  class="btn  sm btn-outline-info "  role ="button"  href="{{url('/admin/cliente')}}">Nuevo</a></li>
                                    <a class="btn   btn-outline-info "  role ="button" href="{{url('/lista/cliente')}}"  >Lista</a></li>     
                                </ul>
                            </div>  
                             <div class="collapse menu2" class="dropdown-menu dropdown-menu2-right"  id="menu2">
                                <ul class="list-inline">
                                    <a  class="btn  sm btn-outline-info "  role ="button"  href="{{url('/admin/tecnico')}}">Nuevo</a></li>
                                    <a class="btn   btn-outline-info "  role ="button"  href="{{url('/lista/cliente')}}"  >Lista</a></li>     
                                </ul>
                            </div>        
                </nav>
            </div>
        </div>
         {{-- **************************************** MENU de Cliente *********************************************** --}}
    @elseif(Auth::user()->hasRole('cliente'))
         <div class="container">
            <div class="row justify-content-center">
                <nav>
                        <hr>
                        <a href="{{url('/inicio')}}"  data-original-title="Inicio"  class="btn  btn-info "  role ="button" > Inicio <i class="glyphicon glyphicon-edit"></i></a>

                        <a  data-toggle="collapse" href="#menu5"  class="btn  btn-info " role ="button" > Muestra <span class="caret"></span></a>
                           
                        <hr>
                            <div class="collapse menu5" class="dropdown-menu5 dropdown-menu-right"  id="menu5">
                                <ul class="list-inline">
                                    
                                    <a  class="btn  sm btn-outline-info "  role ="button"  href="{{url('/muestra/altamuestra')}}">Solicitud de Muestra</a></li>
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Lista</a></li>
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Historial</a></li>
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Estado Actual</a></li>
                                </ul>
                            </div>    
                </nav>
            </div>
        </div>
    @endif
     @endauth
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
