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

    {{-- **************************************** MENU *********************************************** --}}

    {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}


 {{-- @auth
 <div class="container">
     <div class="row justify-content-center">
                @if(Auth::user()->hasRole('admin'))
                <nav>
                	<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab"  href="{{url('/inicio') }}" role="tab" aria-controls="nav-home" aria-selected="true">Inicio</a>
						<a class="nav-item nav-link" id="nav-profile-tab"  href="{{url('/perfil') }}" role="tab" aria-controls="nav-profile" aria-selected="false">Perfil</a>
						<a class="nav-item nav-link" id="nav-contact-tab"  href="{{url('/tecnico') }}" role="tab" aria-controls="nav-contact" aria-selected="false">Nuevo Técnico</a>
                        <a class="nav-item nav-link" id="nav-about-tab" href="{{url('/cliente') }}" role="tab" aria-controls="nav-about" aria-selected="false">Nuevo Cliente</a>
                        <a class="nav-item nav-link" id="nav-about-tab"  href="{{url('/muestra') }}" role="tab" aria-controls="nav-about" aria-selected="false">Muestras</a>
					</div>
                </nav>

                @elseif(Auth::user()->hasRole('cliente'))
                <nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab"  href="{{url('/inicio') }}" role="tab" aria-controls="nav-home" aria-selected="true">Inicio</a>
						<a class="nav-item nav-link" id="nav-profile-tab"  href="{{url('/perfil') }}" role="tab" aria-controls="nav-profile" aria-selected="false">Perfil</a>
						<a class="nav-item nav-link" id="nav-contact-tab"  href="{{url('/tecnico') }}" role="tab" aria-controls="nav-contact" aria-selected="false">Nuevo Solicitud</a>
                        <a class="nav-item nav-link" id="nav-about-tab" href="{{url('/cliente') }}" role="tab" aria-controls="nav-about" aria-selected="false">Muestras</a>
                        <a class="nav-item nav-link" id="nav-about-tab"  href="{{url('/muestra') }}" role="tab" aria-controls="nav-about" aria-selected="false">Historial</a>
					</div>
                </nav>

                @else
                <nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab"  href="{{url('/inicio') }}" role="tab" aria-controls="nav-home" aria-selected="true">Inicio</a>
						<a class="nav-item nav-link" id="nav-profile-tab"  href="{{url('/perfil') }}" role="tab" aria-controls="nav-profile" aria-selected="false">Perfil</a>
						<a class="nav-item nav-link" id="nav-contact-tab"  href="{{url('/tecnico') }}" role="tab" aria-controls="nav-contact" aria-selected="false">Nuevo Técnico</a>
                        <a class="nav-item nav-link" id="nav-about-tab" href="{{url('/cliente') }}" role="tab" aria-controls="nav-about" aria-selected="false">Nuevo Cliente</a>
                        <a class="nav-item nav-link" id="nav-about-tab"  href="{{url('/muestra') }}" role="tab" aria-controls="nav-about" aria-selected="false">Muestras</a>
					</div>
                </nav>

                @endif
    </div>
</div> --}}

{{-- <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
					</div>
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
						Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
					</div>
					<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
						Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
					</div>
				</div> --}}


{{--
     @endauth --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
