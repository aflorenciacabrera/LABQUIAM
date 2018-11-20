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
</head>
{{-- ********************************** Navegador  ****************************************** --}}

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            {{--******************** Logo *******************--}}
             <div class="nav-header " >
                <a class="navbar-brand "  href="{{ url('/') }}" ><img src="{{asset('img/quimica.jpg')}}" width="50" />
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                {{-- Lista de dropdown --}}
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{url('/inicio')}}">Inicio</a>
                                    <a class="dropdown-item" href="{{url('/perfil')}}">Perfil</a>
                                   
                                     <hr>{{-- linea de separacion al Salir --}}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }} <i class="fa fa-off"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                        
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            
        </nav>
   @guest
        
   @else
   @extends('layouts.menu')
   <div class="container">
     <div class="row justify-content-center">
       @if(Auth::user()->hasRole('admin'))
          <ul class="nav">
          <li><a href="{{url('/perfil')}}"  class="btn btn-primary  " > <i class="fa fa-user"> </i> Perfil</a></li> 
          
          <li><a href="{{url('admin/usuario')}}" class="btn btn-primary  " > <i class="fa fa-plus"> </i> Nuevo Técnico</a>
          {{-- <ul class ="sub">
          <li><a href="#">Lenovo</a></li> 
            <li><a href="#">Nokia</a></li>
            <li><a href="#">LAVA</a></li>
            </ul> --}}
          </li>

          <li><a href="{{url('lista/usuario')}}"class="btn btn-primary  " ><i class="fa fa-list"></i> Lista de Técnico</a>
          {{-- <ul class ="sub">
          <li><a href="#">HP</a></li> 
            <li><a href="#">Dell</a></li>
            <li><a href="#">Lenovo</a></li>
        </ul> --}}
          </li> 

          <li><a href="{{url('lista/usuario')}}" class="btn btn-primary  " ><i class="fa fa-list"></i> Lista de Clientes</a>
          {{-- <ul class ="sub">
          <li><a href="#">LG</a></li> 
            <li><a href="#">samsung</a></li>
            <li><a href="#">Kelvinator</a></li>
            </ul>  --}}
            </li>
            
          </ul>
      @elseif(Auth::user()->hasRole('cliente'))
            <ul class="nav">
            <li><a href="{{url('/perfil')}}" class="btn btn-primary  "><i class="fa fa-home"></i> Perfil</a></li> 
          
            <li><a href="{{url('admin/usuario')}}" class="btn btn-primary  " ><i class="fa fa-plus"></i> Nuevo Técnico</a>
            {{-- <ul class ="sub">
            <li><a href="#">Lenovo</a></li> 
              <li><a href="#">Nokia</a></li>
              <li><a href="#">LAVA</a></li>
              </ul> --}}
            </li>
        
            {{-- <li><a href="{{url('lista/usuario')}}"> Lista de Técnico</a> --}}
            {{-- <ul class ="sub">
            <li><a href="#">HP</a></li> 
              <li><a href="#">Dell</a></li>
              <li><a href="#">Lenovo</a></li>
          </ul> --}}
            {{-- </li>  --}}
        
            <li><a href="{{url('lista/usuario')}}"class="btn btn-primary  " ><i class="fa fa-list"></i>Lista de Clientes</a>
            {{-- <ul class ="sub">
            <li><a href="#">LG</a></li> 
              <li><a href="#">samsung</a></li>
              <li><a href="#">Kelvinator</a></li>
              </ul>  --}}
              </li>
              
            </ul>
        @else
            <ul class="nav">
          <li><a href="{{url('/perfil')}}"class="btn btn-primary  " >Perfil</a></li> 
         
            <li><a href="{{url('admin/usuario')}}"class="btn btn-primary  " >Nuevo Técnico</a>
            {{-- <ul class ="sub">
            <li><a href="#">Lenovo</a></li> 
              <li><a href="#">Nokia</a></li>
              <li><a href="#">LAVA</a></li>
              </ul> --}}
            </li>
       
            <li><a href="{{url('lista/usuario')}}" class="btn btn-primary  "> Lista de Técnico</a>
            {{-- <ul class ="sub">
            <li><a href="#">HP</a></li> 
              <li><a href="#">Dell</a></li>
              <li><a href="#">Lenovo</a></li>
          </ul> --}}
            </li> 
         
            <li><a href="{{url('lista/usuario')}}" class="btn btn-primary  ">Lista de Clientes</a>
            {{-- <ul class ="sub">
            <li><a href="#">LG</a></li> 
              <li><a href="#">samsung</a></li>
              <li><a href="#">Kelvinator</a></li>
              </ul>  --}}
              </li>
              
            </ul>
        @endif
  </div>
	</div>
	
     @endguest
        <main class="py-4">
            
            @yield('content')
           
        </main>
    </div>
</body>

</html>
