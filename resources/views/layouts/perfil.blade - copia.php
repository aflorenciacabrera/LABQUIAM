

<style>
/* body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
} */
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>


{{-- Panel de lista de Clientes registrados       --}}
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center"> <h3 >Clientes</h3></div>
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
        <h4>Lista de Clientes</h4>
        
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
                             @if($cliente->count(Auth::user()->hasRole('cliente')))
                        @foreach($cliente as $user)
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
                            <td colspan="8">No hay Usuarios registrados !!</td>
                        </tr>
                    @endif
                            </form>
                            </tr> 
                       
                        </tbody>
                </table>

              </div>   
              {{-- ***********************Pagination********************************* --}}
                            @if ($cliente->count(Auth::user()->hasRole('cliente')))    
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
           
            <h4 class="modal-title custom_align" id="Heading">Edit Cliente</h4>
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
           <h4 class="modal-title custom_align" id="Heading">Eliminar Cliente</h4>
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-times" aria-hidden="true"></span></button>
        </div>
        <div class="modal-body">
        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Está seguro que desea Eliminar a este Cliente?</div> 
        </div>
        <div class="modal-footer ">
            <form method="post" action="{{ route('eliminarcliente') }}">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}

                              @if ($cliente->count(Auth::user()->hasRole('cliente')))
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
					
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center"><h3>Perfil de {{ Auth::user()->name }}</h3></div>
                <div class="card-body">
                <div class="row">
                   <div class="col-md-4">
                        <div class="profile-img">
                             <form enctype="multipart/form-data" action="{{url('/perfil')}}" method="POST"> 
                            <img src="/cargas/avatars/{{ Auth::user()->avatar }}" alt="" />
                            <div class="file btn btn-lg btn-info" >
                               Cambiar Imagen
                                <input type="file" name="avatar" accept="image/*" value="Seleccionar imagen" />
                            </div>
                               
                           
                        </div>
                            <div class="col-md-3 col-lg-12 " align="center">
                                 <form enctype="multipart/form-data" action="{{url('/perfil')}}" method="POST"> 
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" value="Cargar" class="pull btn btn-sm btn-default active">
                              </div>
                               </form>  
                    </div>
                    
                 
                <div class=" col-md-14 col-lg-8" align="center"> 
                  <table class="table table-user-information">
                    <tbody>
                      
                      <tr>
                        <td>Usuario:</td>
                        <td>{{ Auth::user()->name }}</td>
                      </tr>
                      <tr>
                        <td>Nombre :</td>
                        <td>{{ Auth::user()->nombre }}</td>
                      </tr>
                      <tr>
                        <td>Apellido:</td>
                        <td>{{ Auth::user()->apellido }}</td>
                      </tr>
                      <tr>
                        <td>Correo electrónico:</td>
                        <td><a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</td>
                      </tr>
                      <tr>
                        <td>Rol que desempeña:</td>
                        <td>{{ Auth::user()->rol }}</td>
                      </tr>
                      <tr>
                        <td>Teléfono de contacto:</td>
                        <td>{{ Auth::user()->telefono }}</td>
                      </tr>
                      <tr>
                        <td>Trabajo:</td>
                        <td>{{ Auth::user()->trabajo }}</td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
              </div>
            </div>
                 <div class="card-footer col-md-12">
                      <div align="center">
                          <div class="form-group row ">
                      
                           <div class="col-md-3">
                        <a href="#" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-info  ">Mensaje</a> </div>
                     

                        
                            <div class="col-md-3">
                            <a href="#ventana"  data-original-title="Editar Perfil"  class="btn  btn-warning " data-toggle="modal" role ="button" > Editar <i class="glyphicon glyphicon-edit"></i></a>
                             </div>
                              <div class="col-md-3">
                                 <form method="post" action="{{ route('eliminarPerfil') }}">
                                                          {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                       
                                <input type="hidden" name="id" value="{{ Auth::Guard()->user()->id }}">
                                <button class="btn  btn-danger" type="submit" >Eliminar  <i class="fa fa-trash"></i></button>
                            </form></div>

                           {{-- <a href="edit.html" data-original-title="Remove this user" data-toggle="tooltip"  class="btn  btn-danger" role ="button">Eliminar<i class="glyphicon glyphicon-trash"></i></a>       --}}
                       
                               <div class="col-md-3">
                         <a href="{{ url('/inicio') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-primary  ">Cancelar</a>
                         </div></div>
                           </div>
                    
                <div class="modal fade in" id="ventana" >
                  <div class="modal-dialog">
                    <div class="container">
                      <div class="row justify-content-center">
                      <div class="  col-md-0 " >
                      <div class="modal-content">
                      <div class="card">  
                            <div class="card-header text-center">Panel de {{ Auth::user()->name }}   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button></div>
                      </div>
                    <form method="POST" action="{{url('/perfil')}}" class="bootstrap-form-with-validation">
                      {{ csrf_field() }}
                    {{ method_field('PUT') }}
                      
                            <table class="table table-user-information">
                            <tbody>
                            <tr>
                            <td>Usuario:</td>
                            <td><input  class="form-control" type="" name="name" value="{{ Auth::user()->name }}"></td>
                            </tr>
                            <tr>
                            <td>Nombre :</td>
                            <td><input  class="form-control" type="" name="nombre" value="{{ Auth::user()->nombre }}"></td>
                            </tr>
                            <tr>
                            <td>Apellido:</td>
                            <td><input  class="form-control" type="" name="apellido" value="{{ Auth::user()->apellido }}"></td>
                            </tr>
                            <tr>
                            <td>Teléfono de contacto:</td>
                            <td><input  class="form-control" type="" name="telefono" value="{{ Auth::user()->telefono }}"></td>
                            </tr>
                            </tbody>
                            </table>
                            <div class="card-footer ">
                                <div class="row">
                                            {{--Boton de Guaedar --}}                         
                                            <input type="hidden" name="id" value="{{ Auth::user()->id }}" >
                                          <input type="submit" data-original-title="Editar perfil" data-toggle="tooltip" class="btn btn-sm btn-success" value="Actualizar " > </input>                             
                                </div>                    
                            </div>
                    </form> 
                    
                    </div>
                  </div>
                </div>
                </div>
                </div>
                </div>     
          </div>
            </div>
        </div>
    </div>
 </div>

