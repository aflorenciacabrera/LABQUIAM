

@extends('layouts.footer')

@section('content')

              <div class="container">
            <div class="row justify-content-center">
                <nav>
                        <hr>
                        <a  href="{{url('/inicio')}}"  data-original-title="Inicio"  class="btn  btn-info "  role ="button" > Inicio <i class="glyphicon glyphicon-edit"></i></a>

                        <a data-toggle="collapse" href="{{url('tecnico/inicio')}}" data-original-title="Tecnico"  class="btn  btn-info "  role ="button" > Técnico <i class="glyphicon glyphicon-edit"></i></a>

                        <a data-toggle="collapse" href="{{url('cliente/inicio')}}"  data-original-title="Cliente"  class="btn  btn-info "  role ="button" > Cliente <i class="glyphicon glyphicon-edit"></i></a>

                        <a  data-toggle="collapse" href="{{url('muestra/inicio')}}"  class="btn  btn-info " role ="button" > Muestra <span class="caret"></span></a>
                           
                        <hr>
                </nav>
            </div>
              </div>
            <div class="row justify-content-center">
               
                     <img src="{{asset('img/icono quimica.png')}}" width="300" />
                    
            </div>
        
@endsection

@extends('layouts.app')

