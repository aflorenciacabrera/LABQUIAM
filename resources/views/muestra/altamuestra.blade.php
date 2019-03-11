@extends('layouts.footer')

@extends('layouts.app')

@section('content')

 

{{-- Alta de tecnico --}}
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="h4">Alta Muestra</h1>

                    {{-- <div class="dropdown">
                        <a class="btn btn-white dropdown-toggle"
                            role="button"
                            id="dropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            Administrar
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/muestra/procedencia">Procedencia</a>
                            <a class="dropdown-item" href="/muestra/tipodemuestra">Tipo de muestra</a>
                            <a class="dropdown-item" href="/muestra/tipodeanalisis">Tipo de analisis</a>
                        </div>
                    </div> --}}
                </div>

                       
                <form method="POST" action="{{url('muestra/nuevo')}}">
                    <div class="card-body">
                        @csrf

                        <div class="form-group row">
                            <div class="col-6">
                                <label for="fecha_ingreso">Fecha de ingreso (*)</label>
                                <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso" placeholder="Ej: 2018/11/29" required>
                            </div>
                            <div class="col-6">
                                <label for="fecha_toma_muestra">Fecha de toma (*)</label>
                                <input type="date" class="form-control" name="fecha_toma_muestra" id="fecha_toma_muestra" placeholder="Ej: 2018/11/29" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="procedencia">Seleccione una procedencia (*) 
                                    {{-- <a href="#ModalAgregarProcedencia" class="btn  btn-info  right" role='button'  data-toggle="modal">Agregar </a> --}}
                                     <a  href="#ModalAgregarProcedencia" role="button"  data-toggle="modal" class="btn btn-info" id="agregar_porcedencia">
    								    <span class="fa fa-plus"></span>
                        			    <span class="hidden-xs"> </span> 
                                     </a>
                                </label>
                                <select class=" form-control" name="procedencia" id="procedencia" required>
                                     @foreach ( $procedencias as $procedencia)
                                        <option value={{$procedencia->id}}> {{$procedencia->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="tipo_muestra">Seleccione un tipo de muestra (*) 
                                    {{-- <button type="button" class="btn btn-info" id="agregar_tipomuestra">
    								    <span class="fa fa-plus"></span>
                        			    <span class="hidden-xs"> </span> 
                                     </button> --}}
                                      <a href="#ModalAgregarTipoMuestra" role="button"  data-toggle="modal" class="btn btn-info" id="agregar_tipomuestra">
    								    <span class="fa fa-plus"></span>
                        			    <span class="hidden-xs"> </span> 
                                      </a>
                                {{-- <a  href="/muestra/tipodemuestra">Agregar</a> --}}
                                </label>
                                <select class="form-control" name="tipo_muestra" id="tipo_muestra" required>
                                    @foreach ( $tipomuestras as $tipomuestra)
                                        <option value={{$tipomuestra->id}}> {{$tipomuestra->name}}</option>
                                    @endforeach                
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="remitida_tomada" id="remitida_tomada" value="remitida" required>
                                    <label class="form-check-label" for="input-remitida">Remitida</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="remitida_tomada" id="remitida_tomada" value="tomada" required>
                                    <label class="form-check-label" for="input-tomada">Tomada</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="tipo_analisis">Seleccione un tipo de analisis (*) 
                                     {{-- <button type="button" class="btn btn-info" id="agregar_tipoAnalisis">
    								    <span class="fa fa-plus"></span>
                        			    <span class="hidden-xs"> </span> 
                                     </button> --}}
                                    
                                      <a  href="#ModalAgregarTipoAnalisis" role="button"  data-toggle="modal" class="btn btn-info" id="agregar_tipoAnalisis">
    								    <span class="fa fa-plus"></span>
                        			    <span class="hidden-xs"> </span> 
                                      </a>
                                </label>
                                <select class=" form-control" name="tipo_analisis" id="tipo_analisis" required>
                                     @foreach ( $tipoanalisis as $tipoanalisi)
                                        <option value={{$tipoanalisi->id}}> {{$tipoanalisi->name}}</option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="descripcion">Descripcion</label>
                                <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="detalles">Detalle</label>
                                <textarea class="form-control" name="detalles" id="detalles" rows="3"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-muted d-flex justify-content-end">
                        <div class="col-sm-11 input-column">
                          <a href="{{ url('/inicio') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-light active ">Cancelar</a>  </div>
                        {{-- <a class="btn btn-light mr-2" type="reset">Cancelar</a> --}}
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>
            <script>
                // Procedencia
                 $(document).on('click', '#agregar_porcedencia', function() {
                 $('#ModalAgregarProcedencia').modal('show');
                 });
                 //Tipo de muestra
                 $(document).on('click', '#agregar_tipomuestra', function() {
                 $('#ModalAgregarTipoMuestra').modal('show');
                 });
                  //Tipo de Analisis
                 $(document).on('click', '#agregar_tipoAnalisis', function() {
                 $('#ModalAgregarTipoAnalisis').modal('show');
                 });
            </script>
{{-- Agregar Procedencia --}}
    <div id="ModalAgregarProcedencia" class="modal fade" role="dialog"> 
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header"> 
    				<h4 class="modal-tittle">Agregar Procedencia</h4>
    			</div> 
    			<form  method="POST" action="{{url('muestra/procedencia')}}">
    				<div class="modal-body"> 
    					<div class="form-group col-md-12">
    						<label for="agregar_porcedencia" class="control-label col-sm-4">Nombre: </label>
    						<div class="col-sm-8">
    							<input type="text" class="form-control" id="procedencia" name="name">
    						</div>
    					</div> 
    				</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-default" data-dismiss="modal">
    						<span class="glyphicon glyphicon-remove"></span><span class="hidden-xs"> Cerrar</span>
    					</button>
    					<button  type="submit" id="GuardarNombre" name="GuardarNombre" class="btn btn-primary">
    						<span class="fa fa-save"></span><span class="hidden-xs"> Guardar</span>
                          
    					</button>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>

    {{-- Agregar Tipo de Muestra --}}
    <div id="ModalAgregarTipoMuestra" class="modal fade" role="dialog"> 
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header"> 
    				<h4 class="modal-tittle">Agregar Tipo de Muestra</h4>
    			</div> 
    			<form method="POST" action="{{url('muestra/tipodeanalisis')}}">
    				<div class="modal-body"> 
    					<div class="form-group col-md-12">
    						<label for="agregar_tipomuestra" class="control-label col-sm-4">Nombre: </label>
    						<div class="col-sm-8">
    							<input type="text" class="form-control" id="tipo_muestra" name="name">
    						</div>
    					</div> 
    				</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-default" data-dismiss="modal">
    						<span class="glyphicon glyphicon-remove"></span><span class="hidden-xs"> Cerrar</span>
    					</button>
    					<button type="submit" id="GuardarNombre" name="GuardarNombre" class="btn btn-primary">
    						<span class="fa fa-save"></span><span class="hidden-xs"> Guardar</span>
                          
    					</button>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>

    {{-- Agregar Tipo de Analisis --}}
    <div id="ModalAgregarTipoAnalisis" class="modal fade" role="dialog"> 
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header"> 
    				<h4 class="modal-tittle">Agregar Tipo de Análisis</h4>
    			</div> 
    			<form method="POST" action="{{url('muestra/tipodemuestra')}}">
    				<div class="modal-body"> 
    					<div class="form-group col-md-12">
    						<label for="agregar_tipoAnalisis" class="control-label col-sm-4">Nombre: </label>
    						<div class="col-sm-8">
    							<input type="text" class="form-control" id="tipo_analisis" name="name">
    						</div>
    					</div> 
    				</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-default" data-dismiss="modal">
    						<span class="glyphicon glyphicon-remove"></span><span class="hidden-xs"> Cerrar</span>
    					</button>
    					<button  id="GuardarNombre" name="GuardarNombre" type="submit" class="btn btn-primary">
    						<span class="fa fa-save"></span><span class="hidden-xs"> Guardar</span>
                          
                        </button>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
@endsection

 
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}

