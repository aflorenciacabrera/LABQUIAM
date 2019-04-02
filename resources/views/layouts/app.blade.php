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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
{{-- ********************************** Navegador  ****************************************** --}}

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            {{--******************** Logo *******************--}}
             <div class="nav-header ">
                <div class="row">
                <div class="col-md-2 offset-lg-0">
                     <a class="navbar-brand"  href="{{ url('/') }}" ><img src="{{asset('img/logo3.png')}}" width="270" /></a>

                      
                </div>
                
                 {{-- <div class="col-md-9 offset-lg-1 " >
                    
                     <font face="  " size="6"> {{ config('app.name', 'Laravel') }} </font><span> </span> 
                     <br>
                     <font face="Britannic Bold" size="3"><i><span>Laboratorio  </i> </span></font> 
                     <br>
                      <font face="Britannic Bold" size="3"><i><span> Quimica Ambiental </i> </span></font> 
                      <br>
                     <font face="Britannic Bold" size="3"> <span>FACENA - UNNE </span></font> 
                </div>     --}}
               </div> 
             

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
           
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth
                
           
                        <ul class="navbar-nav mr-auto">
           
                                        <li class="nav-item">  <a   href="{{url('/inicio')}}" class="btn  btn-light btn-sm"  role ="button" ><i class="fa fa-home"></i> Inicio</a> </li>
                                        <li class="nav-item"><a   href="{{url('/perfil')}}" class="btn  btn-light btn-sm"  role ="button" ><i class="fa fa-user"></i> {{ Auth::user()->name }}</a> </li>
                                      
                                   
                               </ul>
                                @endauth
                    {{-- ************************Botones de logeo y registro ************************* --}}
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                       
                       <div class="container">
                           <div class="form-group row "> 
                               
                        @guest 
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Acceder') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                @endif
                            </li>
                        </ul>
                        @else
                         </div>
                           
                           <div class="form-group row ">
                            {{-- Inicia como Administrador --}}
                             @if(Auth::user()->hasRole('admin'))
                            
                             <li class="dropdown" > 
                                 <a  class="btn  btn-light btn-sm"  data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle  nav-link dropdown-toggle"><i class="fa fa-caret-down"></i> Técnico</a>
                                <div role="menu" class="dropdown-menu">
                                <a role="presentation" href="{{url('tecnico/nuevo')}}" class="dropdown-item">Nuevo</a>
                                <a role="presentation" href="{{url('tecnico/lista')}}" class="dropdown-item">Lista</a>
                                
                            </li>
                             <li class="dropdown">
                                 <a class="btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link dropdown-toggle"><i class="fa fa-caret-down"></i> Cliente</a>
                                <div role="menu" class="dropdown-menu">
                                <a role="presentation" href="{{url('cliente/nuevo')}}" class="dropdown-item">Nuevo</a>
                                <a role="presentation" href="{{url('cliente/lista')}}"  class="dropdown-item">Lista</a>
                                
                            </li>
                             <li class="dropdown">
                                 <a class="btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link dropdown-toggle"><i class="fa fa-caret-down"></i>  Muestra</a>
                                <div role="menu" class="dropdown-menu"> 
                                <a role="presentation" href={{url('/muestra/nuevo')}} class="dropdown-item">Nuevo</a>
                                <a role="presentation" href="{{url('muestra/lista')}}"  class="dropdown-item">Lista</a>
                                <a class="dropdown-item" href="{{url('analisis/determinacion')}}" > Operaciones</a>
                                {{-- <a role="presentation" href="{{url('muestra/informe')}}"  
                                class="dropdown-item">Informe</a> --}}

                                 <a role="presentation" href="{{url('muestra/ver/informe')}}"  class="dropdown-item">Ver Informe</a>
                            </li>
                           
                              {{-- Inicia como Tecnico --}}
                            @elseif(Auth::user()->hasRole('tecnico'))
                             <li class="dropdown">
                                 <a class="btn  btn-light btn-sm" data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link dropdown-toggle"><i class="fa fa-caret-down"></i>  Cliente</a>
                                <div role="menu" class="dropdown-menu">
                                <a role="presentation" href="{{url('cliente/nuevo')}}" class="dropdown-item">Nuevo</a>
                                <a role="presentation" href="{{url('cliente/lista')}}"  class="dropdown-item">Lista</a>
                                
                            </li>
                           <li class="dropdown"> 
                                 <a class="btn  btn-light btn-sm" data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link dropdown-toggle"><i class="fa fa-caret-down"></i>  Muestra</a>
                                <div role="menu" class="dropdown-menu"> 
                                <a role="presentation" href={{url('/muestra/nuevo')}} class="dropdown-item">Nuevo</a>
                                <a role="presentation" href="{{url('muestra/lista')}}"  class="dropdown-item">Lista</a>
                            </li>
                              {{-- Inicia como Cliente --}}
                            @elseif(Auth::user()->hasRole('cliente'))
                            <li class="dropdown">
                                 <a class="btn  btn-light btn-sm" data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link dropdown-toggle"><i class="fa fa-caret-down"></i>  Muestra</a>
                                <div role="menu" class="dropdown-menu"> 
                                <a role="presentation" href={{url('/muestra/nuevo')}} class="dropdown-item">Nuevo</a>
                                <a role="presentation" href="{{url('muestra/lista')}}"  class="dropdown-item">Lista</a>
                            </li>
                            @endif
                             <li class="nav-item"> <a   href="{{url('#')}}" class="btn  btn-light btn-sm"  role ="button" ><i class="fa fa-th-list"></i>  Historial</a> </li>
                             
                            <li class="nav-item">  <a  class="btn  btn-light btn-sm"  href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> {{ __('Salir') }}</a> </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                            </div> </div> 
                    </ul>           
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
                  
                </div>
            </div>
        </nav>

        <main class="py-2">
            @yield('content')
        </main>
    </div>
</body>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/script.min.js"></script> --}}
     {{-- <script src="{{ asset('js/script.min.js') }}" defer></script> --}}
    
</html>
