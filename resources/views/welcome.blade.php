<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
@if(session('status'))
      <div class="alert alert-danger text-uppercase text-center" role="alert">
          <strong>{{session('status')}}</strong>
         
          {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> --}}
     </div>
@endif  
 @auth
        @if(Auth::user()->hasRole('tecnico'))
            @if(Session::has('activacion'))     
					<div class="alert alert-warning text-center"><p><h4><strong>Tu usuario ha sido SUSPENDIDO.</strong> </h4></p></div>
                        <div class="alert alert-danger  text-center" role="alert">
                          
                           <h3> <span>{{Session::get('activacion')}}</span> </h3>
                       </div>
                     
                    @endif
       

        @elseif(Auth::user()->hasRole('cliente'))
           
                    @if(Session::has('activacion'))     
					<div class="alert alert-success text-center"><p><h4><strong>Tu usuario ha sido registrado con éxito.</strong> </h4></p></div>
                        <div class="alert alert-danger  text-center" role="alert">
                          
                           <h3> <span>{{Session::get('activacion')}}</span> </h3>
                       </div>
                        @endif

        @endif
        @endauth
                 
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-12">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LABQUIAM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('inicio') }}">Inicio</a>
                        <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Salir') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf</form>
                    @else
                        <a href="{{ route('login') }}">Acceder</a>
                        <a href="{{ route('register') }}">Registrar</a>
                    @endauth
                </div>
            @endif

            <div class="container">
              <div class="row text-center">
                <div class="col-12">
                   
                    <img src="{{asset('img/icono quimica.png')}}" width="300" />
               
                  <h1 class="h1">
                    LABQUIAM
                  </h1>
  
                  <h3 class="lead">Sistema de Gestión de Información de Análisis de Laboratorio de Química Ambiental</h3>
                  
                </div>
              </div>
            </div>
        </div>
    </body>
</html>
