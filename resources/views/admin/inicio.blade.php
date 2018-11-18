
 
@extends('layouts.footer')

@section('content')

@extends('layouts.menu')
               {{-- Mensajes de Alerta --}}
               <div class="container">
 <div class="row">
      <div class="text-center col-md-12 ">
                {{-- Mensaje de activado de Representante --}}
               @if(session('activado'))
                        <div class="alert alert-success text-center" role="alert">

                            <strong>{{session('activado')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       </div>
                    @endif 
                     {{-- Mensaje de desactivado de Representante --}}
                     @if(session('suspendido'))
                        <div class="alert alert-danger text-center" role="alert">

                            <strong>{{session('suspendido')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       </div>
                    @endif 
       </div>
    </div>
     
{{-- Panel de lista de Representantes registrados       --}}
<div class="row">
    <div class="col-md-12 col-md-offset-">
        <div class="panel-body">
          {{-- Titulo --}}
          <div class="pull-left"><h3>Lista de Usuarios</h3></div>   
          {{-- contenido de la tabla --}}     
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
              {{-- Lista de la tabla --}}
             <thead>
               <th>Nombre</th>
               <th>Correo Electrónico</th>
               <th>Roles</th>
               
               <th>Activar</th>
               <th>Desactivar</th>

             </thead>
             <tbody>
              @if($tecnico->count(Auth::user()->hasRole('tecnico')))   

               @foreach($tecnico as $user)   
              <tr>
                 <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->rol }}</td> 
                 @if ($user->estado)
                    
                      <td> <button class="btn btn-primary boton-activar" disabled="true" user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}" ><i class="glyphicon glyphicon-ok"></i>&nbspActivar</button></td>
                      <td>  <button class="btn btn-danger boton-desactivar" user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}"><i class="glyphicon glyphicon-remove"></i>&nbspSuspender</button> </td>
                      @else
                        <td> <button class="btn btn-primary boton-activar"  user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}" ><i class="glyphicon glyphicon-ok"></i>&nbspActivar</button></td>
                      <td>  <button class="btn btn-danger boton-desactivar" disabled="true" user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}"><i class="glyphicon glyphicon-remove"></i>&nbspSuspender</button> </td>
                        
                 @endif
              {{--  <td><a class="btn btn-primary btn-xs " href="" ><span class="glyphicon glyphicon-ok"></span></a></td> 
                <td> --}}
                 {{--  <form action="{{action('LibroController@destroy', $libro->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE"> --}}

                  {{--  <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                 </td> --}}
               </tr>
                @endforeach 
                  @endif
                @if($cliente->count(Auth::user()->hasRole('cliente')))
                  @foreach($cliente as $user)   
              <tr>
                 <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->rol }}</td> 
                 @if ($user->estado)
                    
                      <td> <button class="btn btn-primary boton-activar" disabled="true" user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}" ><i class="glyphicon glyphicon-ok"></i>&nbspActivar</button></td>
                      <td>  <button class="btn btn-danger boton-desactivar" user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}"><i class="glyphicon glyphicon-remove"></i>&nbspSuspender</button> </td>
                      @else
                        <td> <button class="btn btn-primary boton-activar"  user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}" ><i class="glyphicon glyphicon-ok"></i>&nbspActivar</button></td>
                      <td>  <button class="btn btn-danger boton-desactivar" disabled="true" user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}"><i class="glyphicon glyphicon-remove"></i>&nbspSuspender</button> </td>
                        
                 @endif
                 @endforeach 
               @else 
               <tr>
                <td colspan="8">No hay responsables registrados !!</td>
              </tr>
              @endif 
            </tbody>
          </table>
         </div>
        </div>
      </div>
</div>
</div>
{{-- Acciones de java --}}
  <script src="{{ asset('js/app.js') }}" defer></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script>

        $(document).ready(function(){
            
          // acción del boton activar
            $('.boton-activar').click(function(){
                var t = $(this)
                var user = t.attr('user');
               var tipo = t.attr('tipo')
                var nombre = t.attr('nombre')
                var answer = confirm("Desea confirmar la activacion del usuario "+nombre+' ?');
                if(answer){
                    window.location.href = ('/inicio/activar/'+tipo+'/'+user);
                }
            })
             // acción del boton desactivar
             $('.boton-desactivar').click(function(){
                var t = $(this)
                var user = t.attr('user');
                 var tipo = t.attr('tipo')
                var nombre = t.attr('nombre')
                var answer = confirm("Desea confirmar la suspención del usuario "+nombre+' ?');
                if(answer){
                    window.location.href = ('/inicio/suspender/'+tipo+'/'+user);
                }
            })
        })
    </script>
 
@endsection
 
@extends('layouts.app')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Panel </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->hasRole('admin'))
                       
                         <div align="center">
                            <a  rol="button" href="{{url('admin/usuario')}}" class="btn btn-outline-primary btn-sm " > <i class="fa fa-plus"></i> Nuevo Técnico</a>
                            <a  rol="button" href="{{url('admin/listado/usuario')}}" class="btn btn-outline-info btn-sm " > <i class="fa fa-plus"></i> Lista de Técnico</a>
                            <a  rol="button" href="{{url('admin/listado/cliente')}}" class="btn btn-outline-success btn-sm " > <i class="fa fa-plus"></i> Lista de Clientes</a>
                            
                             <a  class="btn btn-sm btn-default"  role="button" href="{{url('/perfil') }}" >Perfil <i class="glyphicon glyphicon-user"></i></a>
                        </div>
                    @elseif(Auth::user()->hasRole('cliente'))
                       <div>Acceso Cliente</div>
                        <a  class="btn btn-sm btn-default"  role="button" href="{{url('/perfil') }}" >Perfil <i class="glyphicon glyphicon-user"></i></a>
                    @else
                        <div>Acceso Usuario</div>
                         <a  class="btn btn-sm btn-default"  role="button" href="{{url('/perfil') }}" >Perfil <i class="glyphicon glyphicon-user"></i></a>
                    @endif
                    

                </div>
            </div>
        </div>
    </div>
</div> --}}


