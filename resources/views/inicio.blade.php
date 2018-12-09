
@extends('layouts.footer')

@section('content')
{{-- **************************************** MENU *********************************************** --}}
   
    @auth
    {{-- **************************************** MENU de Admin *********************************************** --}}
    @if(Auth::user()->hasRole('admin'))
        <div class="container">
            <div class="row justify-content-center">
                <nav>
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
