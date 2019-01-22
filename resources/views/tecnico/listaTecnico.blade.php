

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

    {{-- Panel de lista de Tecnico registrados       --}}
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center"> <h3 >Técnicos</h3></div>
                <div class="card-body">
{{-- ********************************************************************************************************** --}}
                        <div class="col-md-16 col-md-offset-0" class="text-center" >      
                            
                            {{-- <div align="center">
                                
                                <a  rol="button" href="{{url('producto/agregar')}}" class="btn btn-outline-primary btn-sm " > <i class="fa fa-plus"></i> Nuevo</a>
                            </div> --}}
{{-- ********************************************************************************************************** --}}
                        <div class="row">
                        <div class="col-md-12 col-md-offset-0">    
                                <div class="car-body">
                                    {{-- Titulo izquierda --}}
                                    <div class="top-left"><h3> </h3></div>
                                    {{-- Titulo derecha --}}
                                    <div class="top-right"> </div>
{{-- ***************************************Lista de productos***************************************************** --}}
<div class="container">
	<div class="row">
        <div class="col-md-12">
        <h4>Lista de Técnicos</h4>
        
        <div class="table-responsive text-center">        
               <table id="mytable" class="table table-bordred table-striped">                 
                   <thead>
                        <th>Usuario</th>
                        <th>Correo Electrónico</th>
                        <th>Roles</th>
                        <th>Activar</th>
                        <th>Desactivar</th>
                         <th>Ver</th>
                        <th>Eliminar</th>
                    </thead>
                        <tbody> 
                             @if($tecnico->count(Auth::user()->hasRole('tecnico')))
                        @foreach($tecnico as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->rol }}</td>
                                 @if ($user->estado)
                                <td><button class="btn btn-primary boton-activar" disabled="true" user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}" ><i class="glyphicon glyphicon-ok"></i>&nbspActivar</button></td>
                                <td><button class="btn btn-warning boton-desactivar" user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}"><i class="glyphicon glyphicon-remove"></i>&nbspSuspender</button> </td>
                                @else
                                <td><button class="btn btn-primary boton-activar"  user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}" ><i class="glyphicon glyphicon-ok"></i>&nbspActivar</button></td>
                                 
                                <td><button class="btn btn-warning boton-desactivar" disabled="true" user="{{$user->id}}" nombre="{{$user->name}}" tipo="{{$user->rol}}"><i class="glyphicon glyphicon-remove"></i>&nbspSuspender</button> </td>
                                @endif
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fa fa-edit"></i></button></p></td>
    
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fa fa-trash-o"></i></button></p></td>

                               
                        @endforeach
                       
                    @else
                        <tr>
                            <td colspan="8">No hay Técnicos registrados !!</td>
                        </tr>
                    @endif
                            </form>
                            </tr> 
                       
                        </tbody>
                </table>
                 

              </div>   
               {{-- ***********************Pagination********************************* --}}
                            @if ($tecnico->count(Auth::user()->hasRole('tecnico')))    
                           <div class="col-lg-3 offset-lg-4">
                                <nav >
                                    <ul class="pagination  ">
                                        <li class="page-item"><a class="page-link" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item"><a class="page-link">1</a></li>
                                        <li class="page-item"><a class="page-link">2</a></li>
                                        <li class="page-item"><a class="page-link">3</a></li>
                                        <li class="page-item"><a class="page-link">4</a></li>
                                        <li class="page-item"><a class="page-link">5</a></li>
                                        <li class="page-item"><a class="page-link" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div> @endif
        </div>
	</div>
</div>
{{-- ***********************Modal de Edit********************************* --}}
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
           
            <h4 class="modal-title custom_align" id="Heading">Edit Técnico</h4>
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-times" aria-hidden="true"></span></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <input class="form-control " type="text" placeholder="">
            </div>
            <div class="form-group"> 
                <input class="form-control " type="text" placeholder="">
            </div>
            <div class="form-group">
                <textarea rows="2" class="form-control" placeholder=""></textarea>
            </div>
        </div>
        <div class="modal-footer ">
            <button type="button" class="btn btn-info btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Aceptar</button>
        </div>
    </div>
    <!-- /.modal-content --> 
   </div>
      <!-- /.modal-dialog --> 
</div>
 {{-- ***********************Modal de Delete********************************* --}}
                                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h4 class="modal-title custom_align" id="Heading">Eliminar Técnico</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-times" aria-hidden="true"></span></button>
                                        </div>
                                        <div class="modal-body">
                                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Está seguro que desea Eliminar a este Técnico?</div> 
                                        </div>
                                        <div class="modal-footer ">
                                            <form method="post" action="{{ route('eliminartecnico') }}">
                                                                                                {{ csrf_field() }}
                                                                                                {{ method_field('DELETE') }}
                                                        @if ($tecnico->count(Auth::user()->hasRole('tecnico')))
                                                            <input type="hidden" name="id" value="{{$user->id}}">
                                                        @endif
                                                                
                                                                {{-- <button class="btn  btn-danger" type="submit" >  <i class="fa fa-trash-o"></i></button> --}}
                                                                
                                            <button  class="btn btn-danger"  type="submit"><span class="fa fa-ok-sign"></span>Si</button></form>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> No</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content --> 
                                </div>
                                    <!-- /.modal-dialog --> 
                                </div>
                               
                
{{-- ********************************************************************************************************** --}}
                </div>
            </div>
        </div>
    </div>
{{-- ********************************************************************************************************** --}}
                </div>
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
