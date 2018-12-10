
@extends('layouts.footer')

@section('content')
{{-- **************************************** MENU *********************************************** --}}
   
@auth
    {{-- **************************************** MENU de Admin *********************************************** --}}
    @if(Auth::user()->hasRole('admin'))
   
        <div class="container">
            <div class="row justify-content-center">
                <nav>
                   
                        {{-- <div id="app">
                            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                                <div class="container">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        
                                        <ul class="navbar-nav mr-auto">
                                            
                                            <li class="nav-item"> <a class="nav-link"  href="{{url('/inicio')}}"    > Inicio </a> </li>
                                    
                                            <li class="nav-item"> <a   class="nav-link" href="{{url('tecnico/inicio')}}" > Técnico </a> </li>

                                            <li class="nav-item"><a   class="nav-link" href="{{url('cliente/inicio')}}"    > Cliente </a> </li>

                                            <li class="nav-item"> <a  class="nav-link" href="{{url('muestra/inicio')}}"   > Muestra </a> </li>        
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div> --}}

                        <hr>
                        <a  href="{{url('/inicio')}}"   class="btn  btn-info "  role ="button" > Inicio </a>

                        <a  href="{{url('tecnico/inicio')}}"class="btn  btn-info "  role ="button" > Técnico </a>

                        <a  href="{{url('cliente/inicio')}}"   class="btn  btn-info "  role ="button" > Cliente </a>

                        <a  href="{{url('muestra/inicio')}}"  class="btn  btn-info " role ="button" > Muestra </a>
                           
                        <hr>
                            
                </nav>
            </div>
        </div>
         {{-- **************************************** MENU de Tecnico *********************************************** --}}
    @elseif(Auth::user()->hasRole('tecnico'))
        <div class="container">
            <div class="row justify-content-center">
                <nav>
                        <hr>
                        <hr>
                        <a  href="{{url('/inicio')}}"   class="btn  btn-info "  role ="button" > Inicio </a>

                        <a  href="{{url('cliente/inicio')}}"   class="btn  btn-info "  role ="button" > Cliente </a>

                        <a  href="{{url('muestra/inicio')}}"  class="btn  btn-info " role ="button" > Muestra </a>
                           
                        <hr>
                           
                </nav>
            </div>
        </div>
         {{-- **************************************** MENU de Cliente *********************************************** --}}
    @elseif(Auth::user()->hasRole('cliente'))
         <div class="container">
            <div class="row justify-content-center">
                <nav>
                        <hr>
                        <hr>
                        <a  href="{{url('/inicio')}}"   class="btn  btn-info "  role ="button" > Inicio </a>

                        <a  href="{{url('muestra/inicio')}}"  class="btn  btn-info " role ="button" > Muestra </a>
                           
                        <hr>
                           
                        <hr>
                           
                </nav>
            </div>
        </div>

    @endif
     @endauth
     <div class="row justify-content-center">
               
                     <img src="{{asset('img/icono quimica.png')}}" width="300" />
                    
            </div>
     @endsection

@extends('layouts.app')
