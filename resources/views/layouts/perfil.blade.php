

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
                      <br>
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
                        {{-- <a href="#" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-info  ">Mensaje</a>  --}}
                        <div align="centrer" class="col-md-12 ">
                        <a href="#edit"  data-original-title="Editar Perfil"  title="Editar" class="btn  btn-outline-warning btn-xs " data-toggle="modal" role ="button" > Editar <i class="fa fa-edit"></i></a>
                        <a href="#delete"  data-original-title="Remove this user"  title="Eliminar" class="btn  btn-outline-danger btn-xs " data-toggle="modal" role ="button" > Eliminar  <i class="fa fa-trash-o"></i></a>
                        <a href="{{ url('/inicio') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-outline-primary  ">Cancelar  <i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </div>
                    

             {{-- ***********************Modal de Edit********************************* --}}
                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        
                            <h4 class="modal-title custom_align" id="Heading">Edit Perfil </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-times" aria-hidden="true"></span></button>
                        </div>
                        <form method="POST" action="{{url('/perfil')}}" class="bootstrap-form-with-validation">
                      {{ csrf_field() }}
                    {{ method_field('PUT') }}
                        <div class="modal-body">            
                            <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-center">Usuario:</label>
                                <div class="col-md-6">
                            <input class="form-control " name="name" value="{{ Auth::user()->name }}" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-center">Nombre:</label>
                                <div class="col-md-6">
                            <input class="form-control " name="nombre" value="{{ Auth::user()->nombre }}" type="text" placeholder="">
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-center">Apellido:</label>
                                <div class="col-md-6">
                            <input class="form-control " name="apellido" value="{{ Auth::user()->apellido }}" type="text" placeholder="">
                                </div>
                            </div>
                              <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-center">Teléfono:</label>
                                <div class="col-md-6">
                            <input class="form-control " name="telefono" value="{{ Auth::user()->telefono }}" type="text" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer  ">
                             <input type="hidden" name="id" value="{{ Auth::user()->id }}" >
                              
                            <input type="submit" value="Actualizar " class="btn btn-info btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span></input>
                        </div>
                    </div>
                     </form> 
                    <!-- /.modal-content --> 
                </div>
                    <!-- /.modal-dialog --> 
                </div>
                {{-- ***********************Modal de Delete********************************* --}}
                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title custom_align" id="Heading">Eliminar Cuenta</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-times" aria-hidden="true"></span></button>
                        </div>
                        <div class="modal-body">
                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Está seguro que desea Eliminar a Tu Cuenta?</div> 
                        </div>
                        <div class="modal-footer ">
                        <form method="post" action="{{ route('eliminarPerfil') }}">
                                                                        {{ csrf_field() }}
                                                                        {{ method_field('DELETE') }}
                                                                    
                                                    <input type="hidden" name="id" value="{{ Auth::Guard()->user()->id }}">
                                                    {{-- <button class="btn  btn-danger" type="submit" data-toggle="modal" " data-title="Eliminar"   >Eliminar  <i class="fa fa-trash-o"></i></button>
                                                </form> --}}
                                                
                            <button  class="btn btn-danger"  type="submit"><span class="fa fa-ok-sign"></span>Si</button></form> 
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> No</button>
                        </div>
                    </div>
                    <!-- /.modal-content --> 
                </div>
                    <!-- /.modal-dialog --> 
                </div>
 
                
                </div>
            </div>
        </div>
    </div>
 </div>

