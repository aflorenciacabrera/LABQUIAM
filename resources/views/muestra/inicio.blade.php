

@extends('layouts.footer')

@section('content')
 @if(Auth::user()->hasRole('cliente'))
   <div class="container">
            <div class="row justify-content-center">
                <nav>
                        <hr>
                        <a  href="{{url('/inicio')}}"   class="btn  btn-info "  role ="button" > Inicio </a>   
                         
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Solicitud de Muestra</a>
                                     <a class="btn   btn-outline-info "  role ="button"  href="#">Lista </a>
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Historial</a>
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Estado Actual</a>   
                        <hr>
                </nav>
            </div>
              </div>
              @else
              <div class="container">
            <div class="row justify-content-center">
                <nav>
                        <hr>
                        <a  href="{{url('/inicio')}}"   class="btn  btn-info "  role ="button" > Inicio </a>   
                         <a  class="btn  sm btn-outline-info "  role ="button"  href="{{url('/muestra/altamuestra')}}">Nueva</a>
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Lista</a>
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Solicitudes</a>
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Historial</a>
                                    <a class="btn   btn-outline-info "  role ="button"  href="#">Estado Actual</a>   
                        <hr>
                </nav>
            </div>
              </div>
              @endif

            <div class="row justify-content-center">
               
                     <img src="{{asset('img/icono quimica.png')}}" width="300" />
                    
            </div>
        
@endsection

@extends('layouts.app')

