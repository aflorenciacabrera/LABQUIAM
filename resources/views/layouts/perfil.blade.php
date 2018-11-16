

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
                <div class="card-header text-center">Perfil de {{ Auth::user()->name }}</div>
                <div class="card-body">
                <div class="row">
                   <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{asset('img/default.jpg')}}" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                               Cambiar Imagen
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                  {{-- <img src="{{asset('img/descarga (3).jpg')}}" style="width:100px; height:100px; float:left; margin-right:30px;"  class="img-responsive" > --}}
                 {{-- <div class="col-lg-offset-1 " > 
                  <img alt="User Pic" src="/cargas/avatars/{{ Auth::user()->avatar }}" style="width:120px; height:120px; float:left; margin-right:50px;" id="profile-image1" class=" img-responsive"> 
                   </div>
                        <form enctype="multipart/form-data" action="{{url('/perfil')}}" method="POST">   
                        <input id="profile-image-upload" value="Seleccionar imagen" name="avatar" class="hidden" type="file" accept="image/*" >
                            <div   style="color:#999;" >haga clic aquí para cambiar la imagen del perfil</div>  
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" value="Cargar" class="pull btn btn-sm btn-default active">
                        </form>   --}}
                              <br>
                <div class=" col-md-14 col-lg-8"> 
                  <table class="table table-user-information">
                    <tbody>
                      {{--  <label>Cambiar foto de perfil:</label> --}}
                             {{--  <form enctype="multipart/form-data" action="{{url('productor/perfil')}}" method="POST">   
                                <input type="file" value="Seleccionar imagen" name="avatar"  accept="image/*" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <br>
                                <input type="submit" value="Cargar" class="pull-right btn btn-sm btn-primary">
                              </form> --}}
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
                      <div  align="center"> 
                       <span class="pull-left"> 
                        <a href="#" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-info  ">Mensaje</a>
                        </span> 
                           <a href="#ventana"  data-original-title="Editar Perfil"  class="btn  btn-warning " data-toggle="modal" role ="button" > Editar <i class="glyphicon glyphicon-edit"></i></a>
                           <a href="edit.html" data-original-title="Remove this user" data-toggle="tooltip"  class="btn  btn-danger" role ="button">Eliminar<i class="glyphicon glyphicon-trash"></i></a>      
                         <span class="pull-right"> 
                         <a href="{{ url('/producto') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-primary  ">Cancelar</a>
                         </span> 
                    </div>
                </div>
                <div class="modal fade in" id="ventana" >
                  <div class="modal-dialog">
                    <div class="container">
                      <div class="row justify-content-center">
                      <div class="  col-md-20 " >
                      <div class="modal-content">
                      <div class="card">  
                            <div class="card-header text-center">Panel de {{ Auth::user()->name }}   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button></div>
                      </div>
                    <form method="POST" action="{{url('/perfil')}}" class="bootstrap-form-with-validation">
                      {{ csrf_field() }}
                    {{ method_field('PUT') }}
                      <div class=" col-md-16 col-lg-12 "> 
                            <table class="table table-user-information">
                            <tbody>
                            <tr>
                            <td>Usuario:</td>
                            <td><input  class="form-control" type="" name="name" value="{{ Auth::user()->name }}"></td>
                            </tr>
                            <tr>
                            <td>Nombre :</td>
                            <td><input  class="form-control" type="" name="name2" value="{{ Auth::user()->nombre }}"></td>
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
                            <div class="card-footer">
                                <div class="row">
                                      <div class="col-md-4 col-lg-offset-2 ">
                                            {{--Boton de Guaedar --}}                         
                                            <input type="hidden" name="id" value="{{ Auth::user()->id }}" >
                                          <input type="submit" data-original-title="Editar perfil" data-toggle="tooltip" class="btn btn-sm btn-success" value="Guardar cambios " > </input>
                                      </div>                                   
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