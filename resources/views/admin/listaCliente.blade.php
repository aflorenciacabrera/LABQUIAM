

@extends('layouts.footer')

@section('content')

               {{-- Mensajes de Alerta --}}
<div class="container">
    <div class="row">
        <div class="text-center col-md-12 ">
            @if(session('status'))
            <div class="alert alert-danger text-uppercase text-center" role="alert">
            <strong>{{session('status')}}</strong>
            {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> --}}
            </div>
            @endif
            {{-- Mensaje de activado  --}}
            @if(session('activado'))
                <div class="alert alert-success text-center" role="alert">

                    <strong>{{session('activado')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                @endif

                {{-- Mensaje de desactivado --}}
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
            <div class="pull-left"><h3>Lista de Clientes</h3></div>
            {{-- contenido de la tabla --}}
            <div class="table-container">
                <table id="mytable" class="table table-bordred table-striped">
                    {{-- Lista de la tabla --}}
                    <thead>
                        <th>Usuario</th>
                        <th>Correo Electrónico</th>
                        <th>Roles</th>
                        <th>Ver</th>
                        <th>Activar</th>
                        <th>Desactivar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                       

                        @if($cliente->count(Auth::user()->hasRole('cliente')))
                        @foreach($cliente as $user)
                        <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->rol }}</td>
                        <td><button class="btn btn-info " nombre=""><i class="fa fa-check"></i></button></td>
                        @if ($user->estado)

                        <td><button class="btn btn-primary boton-activar" disabled="true" user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}" ><i class="glyphicon glyphicon-ok"></i>&nbspActivar</button></td>
                        <td><button class="btn btn-warning boton-desactivar" user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}"><i class="glyphicon glyphicon-remove"></i>&nbspSuspender</button> </td>

                        @else

                        <td><button class="btn btn-primary boton-activar"  user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}" ><i class="glyphicon glyphicon-ok"></i>&nbspActivar</button></td>
                        <td><button class="btn btn-warning boton-desactivar" disabled="true" user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}"><i class="glyphicon glyphicon-remove"></i>&nbspSuspender</button> </td>

                        @endif
                        <td>
                            <form method="post" action="{{ route('eliminarcuenta') }}">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}

                                <input type="hidden" name="id" value="{{$user->id}}">
                                <button class="btn  btn-danger" type="submit" >Eliminar  <i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8">No hay Usuarios registrados !!</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>

{{-- Acciones de javascript --}}
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
