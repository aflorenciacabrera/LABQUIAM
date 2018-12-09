
@extends('layouts.footer')
@section('content')

<div class="container">
            <div class="row justify-content-center">
                <nav>
                        <hr>
                        <a  href="{{url('/inicio')}}"  class="btn  btn-info "  role ="button" > Inicio </a>

                        <a  href="{{url('tecnico/nuevo')}}" class="btn  btn-outline-info "  role ="button" > Nuevo </a>

                        <a   href="{{url('tecnico/lista')}}"  class="btn  btn-outline-info " role ="button" > Lista <span class="caret"></span></a>
                           
                        <hr>
                </nav>
            </div>
              </div>            
<div class="row justify-content-center">
               
                     <img src="{{asset('img/icono quimica.png')}}" width="300" />
                    
            </div>

@endsection
@extends('layouts.app')
