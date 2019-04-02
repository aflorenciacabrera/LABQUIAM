@extends('layouts.footer')
@section('content')

<div class="container">
    <div class="row">
        <div class=" col-md-12 offset-lg-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="h4"> Técnicas para Análisis </h1>
                </div>
                 <div class="card-body">             
                    <div align="center">                 
                       
                        <div class="form-group row">
                            <div class="col-12">
                {{-- **************************** Seleccionar Muestra  ***************************--}}
                                <div class="form-check form-check-inline">
                                    <select name="muestra_id" id="muestra" class="form-control" >
                                        <option value="">Seleccionar Muestra</option>
                                        @foreach ($muestras as $muestra)
                                        <option value="{{$muestra->id}}">{{$muestra->id}}</option>
                                        @endforeach
                                    </select>
                                </div>
                {{-- ********************** Seleccionar Categoria *************************--}}
                                <div class="form-check form-check-inline">
                                    <select name="categoria" id="categoria" class="form-control">
                                        <option value="">Seleccionar categoria</option>
                                        <option value="aguapotable">Agua Potable</option>
                                        <option value="aguaestancada">Agua Estancada</option>
                                    </select>
                                </div>
                                {{-- Seleccionar determinacion --}}
                            {{-- <div class="form-check form-check-inline">
                                <select name="determinacion" id="determinacion" class="form-control">    
                                    <option value="">Seleccionar determinacion</option>
                                    <option value="alcanididad">Alcanididad</option>
                                    <option value="amonio">Amonio</option>
                                    <option value="cloruro">Cloruro</option>
                                    <option value="dureza">Dureza</option>
                                    <option value="fosfatos">Fosfatos</option>
                                    <option value="hierro">Hierro</option>
                                    <option value="nitrato">Nitrato</option>
                                    <option value="nitrito">Nitrito</option>
                                    <option value="oxigeno">Oxigeno</option>
                                    <option value="sulfato">Sulfato</option> 
                                </select>
                            </div> --}}
                            </div>
                        </div>                                
                        </div>
                  </div>
        {{-- ---------------------------------------------Nab tab------------------------------------------------------ --}}
        <div class="card-body">
            
                <nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-alcalinida-tab" data-toggle="tab" href="#nav-alcalinida" role="tab" aria-controls="nav-alcalinida" aria-selected="true">Alcanididad</a>
						<a class="nav-item nav-link" id="nav-amonio-tab" data-toggle="tab" href="#nav-amonio" role="tab" aria-controls="nav-amonio" aria-selected="false">Amonio</a>
						<a class="nav-item nav-link" id="nav-cloruro-tab" data-toggle="tab" href="#nav-cloruro" role="tab" aria-controls="nav-cloruro" aria-selected="false">Cloruro</a>
                        <a class="nav-item nav-link" id="nav-dureza-tab" data-toggle="tab" href="#nav-dureza" role="tab" aria-controls="nav-dureza" aria-selected="false">Dureza</a>
                        <a class="nav-item nav-link" id="nav-fosfato-tab" data-toggle="tab" href="#nav-fosfato" role="tab" aria-controls="nav-fosfato" aria-selected="false">Fosfato</a>
                        <a class="nav-item nav-link" id="nav-hierro-tab" data-toggle="tab" href="#nav-hierro" role="tab" aria-controls="nav-hierro" aria-selected="false">Hierro</a>
                        <a class="nav-item nav-link" id="nav-nitrato-tab" data-toggle="tab" href="#nav-nitrato" role="tab" aria-controls="nav-nitrato" aria-selected="false">Nitrato</a>
                        <a class="nav-item nav-link" id="nav-nitrito-tab" data-toggle="tab" href="#nav-nitrito" role="tab" aria-controls="nav-nitrito" aria-selected="false">Nitrito</a>
                        <a class="nav-item nav-link" id="nav-oxigeno-tab" data-toggle="tab" href="#nav-oxigeno" role="tab" aria-controls="nav-oxigeno" aria-selected="false">Oxigeno</a>
                        <a class="nav-item nav-link" id="nav-sulfato-tab" data-toggle="tab" href="#nav-sulfato" role="tab" aria-controls="nav-sulfato" aria-selected="false">Sulfato</a>
					</div>
				</nav>
			<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
{{-- ********************************************* Formulario de Alcalinidad *****************************************************--}}
 <div class="tab-pane fade show active" id="nav-alcalinidad" role="tabpanel" aria-labelledby="nav-alcalinidad-tab">
  <form method="POST" action="{{url('analisis/tecnica')}}">
                            @csrf
                            <div class="form-check form-check-inline">
                                    <select name="muestra_id" id="muestra" class="form-control" >
                                        <option value="">Seleccionar Muestra</option>
                                        @foreach ($muestras as $muestra)
                                        <option value="{{$muestra->id}}">{{$muestra->id}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                 <div class="form-check form-check-inline">
                                    <select name="categoria" id="categoria" class="form-control">
                                        <option value="">Seleccionar categoria</option>
                                        <option value="aguapotable">Agua Potable</option>
                                        <option value="aguaestancada">Agua Estancada</option>
                                    </select>
                                </div>
                                <input type="hidden" value="alcanididad" name="determinacion">
               
						<input type="hidden" value="alcanididad" name="determinacion">
                            <div class="form-group row">
                                <label for="volumen_gastado" class="col-md-6 col-form-label text-md-center">Volumen gastado de H2SO4 (mL)</label>
                                <div class="col-md-2">
                                    <input id="volumen_gastado" type="text" class="form-control" name="volumen_gastado" required> 
                                </div>                               
                            </div>
                            <div class="form-group row">
                                <label for="factor" class="col-md-6 col-form-label text-md-center">Factor de dilución</label>
                                <div class="col-md-2">
                                    <input id="factor" type="text" class="form-control" name="factor" required> 
                                </div>                             
                            </div>
                            <div class="form-group row">
                                <label for="volumen_calculado" class="col-md-6 col-form-label text-md-center">Volumen calculado gastado de H2SO4 (mL) para la muestra concentrada Alcalinidad (mg/L)</label>
                                <div class="col-md-2">
                                    <input id="volumen_calculado" type="text" class="form-control" name="volumen_calculado" required> 
                                </div> 
                            </div>
                             <div class="form-group row">
                                <label for="botella" class="col-md-6 col-form-label text-md-center">Número de botella</label>
                                <div class="col-md-2">
                                    <input id="botella" type="text" class="form-control" name="botella" required> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="variable" class="col-md-6 col-form-label text-md-center">Ingresar N° para formula</label>
                                <div class="col-md-2">
                                    <input id="variable" type="text" class="form-control" name="variable" required> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6 col-form-label text-md-center">Resultado de Análisis:</label>
                                <div class="col-md-4">
                                    <h3></h3>
                                </div>
                            </div>
                        <div align="center">
                           
                           <button class="btn btn-primary" type="submit">Aceptar</button>
                            {{-- <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " > Aceptar </a> --}}
                        </div>
                </div>
   </form>  

        {{--************************************************* Formulario de Amonio ***************************************************--}}
        
				<div class="tab-pane fade " id="nav-amonio" role="tabpanel" aria-labelledby="nav-amonio-tab">
                            <div class="form-group row">
                                <label for="alcalinidad" class="col-md-6 col-form-label text-md-center">Volumen gastado de H2SO4 (mL)</label>
                                <div class="col-md-4">
                                    <input id="alcalinidad" type="text" class="form-control" name="alcalinidad" required> 
                                </div>                    
                            </div>
                            <div class="form-group row">
                                <label for="alcalinidad" class="col-md-6 col-form-label text-md-center">Factor de dilución</label>
                                <div class="col-md-4">
                                    <input id="alcalinidad" type="text" class="form-control" name="alcalinidad" required> 
                                </div>                               
                            </div>
                            <div class="form-group row">
                                <label for="alcalinidad" class="col-md-6 col-form-label text-md-center">Volumen calculado gastado de H2SO4 (mL) para la muestra concentrada Alcalinidad (mg/L)</label>
                                <div class="col-md-4">
                                    <input id="alcalinidad" type="text" class="form-control" name="alcalinidad" required> 
                                </div>                              
                            </div>
						    <div align="center">
                                <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " > Aceptar </a>
                            </div>
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
					<div class="tab-pane fade" id="nav-cloruro" role="tabpanel" aria-labelledby="nav-cloruro-tab">
						    <div align="center">
                             <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " >  Aceptar </a>
                            </div>
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
					<div class="tab-pane fade" id="nav-dureza" role="tabpanel" aria-labelledby="nav-dureza-tab">
						    <div align="center">                               
                                <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " >  Aceptar </a>
                            </div>
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
					<div class="tab-pane fade" id="nav-fosfato" role="tabpanel" aria-labelledby="nav-fosfato-tab">
					        <div align="center">                                
                                <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " >Aceptar </a>
                            </div>
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
                    <div class="tab-pane fade" id="nav-hierro" role="tabpanel" aria-labelledby="nav-hierro-tab">
					        <div align="center">                                
                                <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " >Aceptar </a>
                            </div>
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
                    <div class="tab-pane fade" id="nav-nitrato" role="tabpanel" aria-labelledby="nav-nitrato-tab">
					        <div align="center">                                 
                                <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " >Aceptar </a>
                            </div>
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
                    <div class="tab-pane fade" id="nav-nitrito" role="tabpanel" aria-labelledby="nav-nitrito-tab">
					        <div align="center">   
                               <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " >Aceptar </a>
                            </div>
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
                     <div class="tab-pane fade" id="nav-oxigeno" role="tabpanel" aria-labelledby="nav-oxigeno-tab">
					        <div align="center"> 
                                <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " >Aceptar </a>
                            </div>
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
                    <div class="tab-pane fade" id="nav-sulfato" role="tabpanel" aria-labelledby="nav-sulfato-tab">
					        <div align="center">                               
                                <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " >Aceptar </a>
                            </div>
                    </div>
                   
                </div>
                    {{-- <button class=" pull-right btn btn-primary" type="submit">Aceptar</button> --}}
            </div>           
        
                    <div class="col-md-10 col-md-offset-1" class="text-center" >       
                        <h3 class="page-header">Lista de Muestras</h3>
                    <div class="gallery center col-md-18 col-md-offset-0">
                    <div class="row">	
                        @if($analisis->count())  	
                            <h1 class="page-header"></h1>
                            <table class="table table-stripped table-bordered">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Caracteristica</th>
                                <th>Determinación</th>
                                <th>Estado</th>
                                <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($analisis as $vial)
                                <tr>
                                <th scope="row">V <label for="">{{$vial->id}}</label></th>
                                    <td> {{$vial->Caracteristica}}</td>
                                    <td>{{$vial->Determinación}}</td>
                                    <td>{{$vial->volumen_calculado}}</td>
                                    <td>{{$vial->Resultado}}</td>
                                    <td><button class="editbtn">Pendiente</button></td>
                                    <td><a href="{{ url('viales/corte/editar/'.$vial->id) }}"  class="btn  btn-warning  right" type='button'   >   <i class="glyphicon glyphicon-edit"></i></a></td>
                                </tr>	
                            @endforeach
                        @else
                                    <tr>
                                        <td colspan="8">No hay registrado de Analisis !!</td>
                                    </tr>	
                        @endif
                                </tbody>
                            </table>
                    </div>
                    </div>
                    <div align="center">
                                
                            {{-- <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="">
                                Guardar</button>  --}}
                    </div>
                    </div>
                  
                    <div class="card-footer text-muted d-flex justify-content-end">
                        <div class="col-sm-11 input-column">
                          <a href="{{ url('muestra/lista') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-light active ">Cancelar</a>
                        </div>
                        {{-- <a class="btn btn-light mr-2" type="reset">Cancelar</a> --}}
                        {{-- <button class="btn btn-primary" type="submit">Aceptar</button> --}}
                    </div>
            </div>
        </div>
    </div>
</div>

  
@endsection
@extends('layouts.app')