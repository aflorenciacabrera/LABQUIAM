 
 @extends('layouts.footer')
@section('content')

 <div class="container">
    <div class="row">
        <div class=" col-md-12 offset-lg-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="h4"> Técnicas para Análisis </h1>
                </div>
                
        {{-- ---------------------------------------------Nab tab------------------------------------------------------ --}}
        <div class="card-body">
            
                <nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-alcalinida-tab" data-toggle="tab" href="#nav-alcalinida" role="tab" aria-controls="nav-alcalinida" aria-selected="true">Alcanididad</a>
						<a class="nav-item nav-link" id="nav-amonio-tab" data-toggle="tab" href="#nav-amonio" role="tab" aria-controls="nav-amonio" aria-selected="false">Amonio</a>
						<a class="nav-item nav-link" id="nav-cloruro-tab" data-toggle="tab" href="#nav-cloruro" role="tab" aria-controls="nav-cloruro" aria-selected="false">Cloruro</a>
                        <a class="nav-item nav-link" id="nav-dureza-tab" data-toggle="tab" href="#nav-dureza" role="tab" aria-controls="nav-dureza" aria-selected="false">Dureza, Calcio y Magnesio</a>
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

            <form method="POST" action="{{url('analisis/determinacion')}}">
            @csrf
                 <div class="card-body">             
                    <div align="center">                 
                       
                        <div class="form-group row">
                            <div class="col-12">
                {{-- **************************** Seleccionar Muestra  ***************************--}}
                                <div class="form-check form-check-inline">
                                    <select name="muestra_id" id="muestra_id" class="form-control" >
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
                                
                            </div>
                        </div>  
                                                       
                        </div>
                  </div>
                                <input type="hidden" value="alcalinidad" name="determinacion">
                            <input type="hidden" value="pendiente" name="estado">
                           
						
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
                         </div>
                </form> 
                </div>
  

        {{--************************************************* Formulario de Amonio ***************************************************--}}
        
				<div class="tab-pane fade " id="nav-amonio" role="tabpanel" aria-labelledby="nav-amonio-tab">
        <form method="POST" action="{{url('analisis/determinacion')}}">
            @csrf
                 <div class="card-body">             
                    <div align="center">                 
                       
                        <div class="form-group row">
                            <div class="col-12">
                {{-- **************************** Seleccionar Muestra  ***************************--}}
                                <div class="form-check form-check-inline">
                                    <select name="muestra_id" id="muestra_id" class="form-control" >
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
                                
                            </div>
                        </div>  
                                                       
                        </div>
                  </div>
                             <input type="hidden" value="amonio" name="determinacion">
                            <input type="hidden" value="pendiente" name="estado">
                  
                            <div class="form-group row">
                                <label for="absrobancia" class="col-md-6 col-form-label text-md-center">absrobancia</label>
                                <div class="col-md-2">
                                    <input id="absrobancia" type="text" class="form-control" name="absrobancia" required> 
                                </div>                    
                            </div>
                            <div class="form-group row">
                                <label for="factor" class="col-md-6 col-form-label text-md-center">Factor de dilución</label>
                                <div class="col-md-2">
                                    <input id="factor" type="text" class="form-control" name="factor" required> 
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
                         </div>
						        </form>  
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
					<div class="tab-pane fade" id="nav-cloruro" role="tabpanel" aria-labelledby="nav-cloruro-tab">
						    <form method="POST" action="{{url('analisis/determinacion')}}">
            @csrf
                 <div class="card-body">             
                    <div align="center">                 
                       
                        <div class="form-group row">
                            <div class="col-12">
                {{-- **************************** Seleccionar Muestra  ***************************--}}
                                <div class="form-check form-check-inline">
                                    <select name="muestra_id" id="muestra_id" class="form-control" >
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
                                
                            </div>
                        </div>  
                                                       
                        </div>
                  </div>
                             <input type="hidden" value="cloruro" name="determinacion">
                            <input type="hidden" value="pendiente" name="estado">
                  
                            <div class="form-group row">
                                <label for="volumen_gastado" class="col-md-6 col-form-label text-md-center">Volumen gastado de AgNO3 (mL)</label>
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
                                <label for="volumen_calculado" class="col-md-6 col-form-label text-md-center">Volumen calculado gastado de AgNO3 (mL) para la muestra conncentrada</label>
                                <div class="col-md-2">
                                    <input id="volumen_calculado" type="text" class="form-control" name="volumen_calculado" required> 
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
                         </div>
						        </form>  
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
					<div class="tab-pane fade" id="nav-dureza" role="tabpanel" aria-labelledby="nav-dureza-tab">
                        <form method="POST" action="{{url('analisis/determinacion')}}">
            @csrf
                 <div class="card-body">             
                    <div align="center">                 
                       
                        <div class="form-group row">
                            <div class="col-12">
                {{-- **************************** Seleccionar Muestra  ***************************--}}
                                <div class="form-check form-check-inline">
                                    <select name="muestra_id" id="muestra_id" class="form-control" >
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
                                
                            </div>
                        </div>  
                                                       
                        </div>
                  </div>
                             <input type="hidden" value="dureza" name="determinacion">
                            <input type="hidden" value="pendiente" name="estado">
                  
                            <div class="form-group row">
                                <label for="volumen_dureza" class="col-md-6 col-form-label text-md-center">Volumen gastado de EDTA p/Dureza (mL)</label>
                                <div class="col-md-2">
                                    <input id="volumen_dureza" type="text" class="form-control" name="volumen_dureza" required> 
                                </div>                    
                            </div>
                            
                              <div class="form-group row">
                                <label for="volumen_gastado" class="col-md-6 col-form-label text-md-center">Volumen gastado de EDTA             p/Ca2+ y Mg2+ (mL)</label>
                                <div class="col-md-2">
                                    <input id="volumen_gastado" type="text" class="form-control" name="volumen_gastado" required> 
                                </div>                    
                            </div>
                            <div class="form-group row">
                                <label for="variable" class="col-md-6 col-form-label text-md-center">Ingresar N° para formula</label>
                                <div class="col-md-2">
                                    <input id="variable" type="text" class="form-control" name="variable" required> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dureza" class="col-md-6 col-form-label text-md-center">Dureza (mg/L)</label>
                                <div class="col-md-4">
                                  
                                </div>                               
                            </div>
                              <div class="form-group row">
                                <label for="calcio" class="col-md-6 col-form-label text-md-center">Calcio (mg/L)</label>
                                <div class="col-md-4">
                                  
                                </div>                               
                            </div>
                             <div class="form-group row">
                                <label for="magnesio" class="col-md-6 col-form-label text-md-center">Magnesio (mg/L)</label>
                                <div class="col-md-4">
                                  
                                </div>                               
                            </div>
                             
                             
                            <div align="center">     
                        <button class="btn btn-primary" type="submit">Aceptar</button> 
                         </div>
						        </form>  
						    
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
					<div class="tab-pane fade" id="nav-fosfato" role="tabpanel" aria-labelledby="nav-fosfato-tab">
					     <form method="POST" action="{{url('analisis/determinacion')}}">
            @csrf
                 <div class="card-body">             
                    <div align="center">                 
                       
                        <div class="form-group row">
                            <div class="col-12">
                {{-- **************************** Seleccionar Muestra  ***************************--}}
                                <div class="form-check form-check-inline">
                                    <select name="muestra_id" id="muestra_id" class="form-control" >
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
                                
                            </div>
                        </div>  
                                                       
                        </div>
                  </div>
                             <input type="hidden" value="fosfato" name="determinacion">
                            <input type="hidden" value="pendiente" name="estado">
                  
                            <div class="form-group row">
                                <label for="absrobancia" class="col-md-6 col-form-label text-md-center">absrobancia</label>
                                <div class="col-md-2">
                                    <input id="absrobancia" type="text" class="form-control" name="absrobancia" required> 
                                </div>                    
                            </div>
                            <div class="form-group row">
                                <label for="factor" class="col-md-6 col-form-label text-md-center">Factor de dilución</label>
                                <div class="col-md-2">
                                    <input id="factor" type="text" class="form-control" name="factor" required> 
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
                         </div>
						        </form>    
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
                    <div class="tab-pane fade" id="nav-hierro" role="tabpanel" aria-labelledby="nav-hierro-tab">
					        <form method="POST" action="{{url('analisis/determinacion')}}">
            @csrf
                 <div class="card-body">             
                    <div align="center">                 
                       
                        <div class="form-group row">
                            <div class="col-12">
                {{-- **************************** Seleccionar Muestra  ***************************--}}
                                <div class="form-check form-check-inline">
                                    <select name="muestra_id" id="muestra_id" class="form-control" >
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
                                
                            </div>
                        </div>  
                                                       
                        </div>
                  </div>
                             <input type="hidden" value="hierro" name="determinacion">
                            <input type="hidden" value="pendiente" name="estado">
                  
                            <div class="form-group row">
                                <label for="absrobancia" class="col-md-6 col-form-label text-md-center">absrobancia</label>
                                <div class="col-md-2">
                                    <input id="absrobancia" type="text" class="form-control" name="absrobancia" required> 
                                </div>                    
                            </div>
                            <div class="form-group row">
                                <label for="factor" class="col-md-6 col-form-label text-md-center">Factor de dilución</label>
                                <div class="col-md-2">
                                    <input id="factor" type="text" class="form-control" name="factor" required> 
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
                         </div>
						        </form>    
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
                    <div class="tab-pane fade" id="nav-nitrato" role="tabpanel" aria-labelledby="nav-nitrato-tab">
					        <form method="POST" action="{{url('analisis/determinacion')}}">
            @csrf
                 <div class="card-body">             
                    <div align="center">                 
                       
                        <div class="form-group row">
                            <div class="col-12">
                {{-- **************************** Seleccionar Muestra  ***************************--}}
                                <div class="form-check form-check-inline">
                                    <select name="muestra_id" id="muestra_id" class="form-control" >
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
                                
                            </div>
                        </div>  
                                                       
                        </div>
                  </div>
                             <input type="hidden" value="nitrato" name="determinacion">
                            <input type="hidden" value="pendiente" name="estado">
                  
                            <div class="form-group row">
                                <label for="absrobancia" class="col-md-6 col-form-label text-md-center">absrobancia</label>
                                <div class="col-md-2">
                                    <input id="absrobancia" type="text" class="form-control" name="absrobancia" required> 
                                </div>                    
                            </div>
                            <div class="form-group row">
                                <label for="factor" class="col-md-6 col-form-label text-md-center">Factor de dilución</label>
                                <div class="col-md-2">
                                    <input id="factor" type="text" class="form-control" name="factor" required> 
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
                         </div>
						        </form>    
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
                    <div class="tab-pane fade" id="nav-nitrito" role="tabpanel" aria-labelledby="nav-nitrito-tab">
					       <form method="POST" action="{{url('analisis/determinacion')}}">
            @csrf
                 <div class="card-body">             
                    <div align="center">                 
                       
                        <div class="form-group row">
                            <div class="col-12">
                {{-- **************************** Seleccionar Muestra  ***************************--}}
                                <div class="form-check form-check-inline">
                                    <select name="muestra_id" id="muestra_id" class="form-control" >
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
                                
                            </div>
                        </div>  
                                                       
                        </div>
                  </div>
                             <input type="hidden" value="nitrito" name="determinacion">
                            <input type="hidden" value="pendiente" name="estado">
                  
                            <div class="form-group row">
                                <label for="absrobancia" class="col-md-6 col-form-label text-md-center">absrobancia</label>
                                <div class="col-md-2">
                                    <input id="absrobancia" type="text" class="form-control" name="absrobancia" required> 
                                </div>                    
                            </div>
                            <div class="form-group row">
                                <label for="factor" class="col-md-6 col-form-label text-md-center">Factor de dilución</label>
                                <div class="col-md-2">
                                    <input id="factor" type="text" class="form-control" name="factor" required> 
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
                         </div>
						        </form>    
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
                     <div class="tab-pane fade" id="nav-oxigeno" role="tabpanel" aria-labelledby="nav-oxigeno-tab">
					        <form method="POST" action="{{url('analisis/determinacion')}}">
            @csrf
                 <div class="card-body">             
                    <div align="center">                 
                       
                        <div class="form-group row">
                            <div class="col-12">
                {{-- **************************** Seleccionar Muestra  ***************************--}}
                                <div class="form-check form-check-inline">
                                    <select name="muestra_id" id="muestra_id" class="form-control" >
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
                                
                            </div>
                        </div>  
                                                       
                        </div>
                  </div>
                             <input type="hidden" value="oxigeno" name="determinacion">
                            <input type="hidden" value="pendiente" name="estado">
                  
                            <div class="form-group row">
                                <label for="Volumen_frasco" class="col-md-6 col-form-label text-md-center">Volumen frasco (mL)</label>
                                <div class="col-md-2">
                                    <input id="Volumen_frasco" type="text" class="form-control" name="Volumen_frasco" required> 
                                </div>                    
                            </div>
                            <div class="form-group row">
                                <label for="volumen_gastado" class="col-md-6 col-form-label text-md-center">Volumen de Na2S2O3 gastado</label>
                                <div class="col-md-2">
                                    <input id="volumen_gastado" type="text" class="form-control" name="volumen_gastado" required> 
                                </div>                               
                            </div>
                             <div class="form-group row">
                                <label for="volumen_agregado" class="col-md-6 col-form-label text-md-center">Volumen de reactivos agregados (mL)</label>
                                <div class="col-md-2">
                                    <input id="volumen_agregado" type="text" class="form-control" name="volumen_agregado" required> 
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
                         </div>
						        </form>    
                    </div>
        {{--************************************************* Formulario de Amonio ***************************************************--}}
                    <div class="tab-pane fade" id="nav-sulfato" role="tabpanel" aria-labelledby="nav-sulfato-tab">
					       <form method="POST" action="{{url('analisis/determinacion')}}">
            @csrf
                 <div class="card-body">             
                    <div align="center">                 
                       
                        <div class="form-group row">
                            <div class="col-12">
                {{-- **************************** Seleccionar Muestra  ***************************--}}
                                <div class="form-check form-check-inline">
                                    <select name="muestra_id" id="muestra_id" class="form-control" >
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
                                
                            </div>
                        </div>  
                                                       
                        </div>
                  </div>
                             <input type="hidden" value="sulfato" name="determinacion">
                            <input type="hidden" value="pendiente" name="estado">
                  
                            <div class="form-group row">
                                <label for="absrobancia" class="col-md-6 col-form-label text-md-center">absrobancia</label>
                                <div class="col-md-2">
                                    <input id="absrobancia" type="text" class="form-control" name="absrobancia" required> 
                                </div>                    
                            </div>
                            <div class="form-group row">
                                <label for="factor" class="col-md-6 col-form-label text-md-center">Factor de dilución</label>
                                <div class="col-md-2">
                                    <input id="factor" type="text" class="form-control" name="factor" required> 
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
                         </div>
						        </form>    
                    </div>
                   
                </div>
                    {{-- <button class=" pull-right btn btn-primary" type="submit">Aceptar</button> --}}
            </div>           
        
                    
                  
                    <div class="card-footer text-muted d-flex justify-content-end">
                        <div class="col-sm-11 input-column">
                          <a href="{{ url('muestra/lista') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-light active ">Cancelar</a>
                        </div>
                        {{-- <a class="btn btn-light mr-2" type="reset">Cancelar</a> --}}
                         {{-- <button class="btn btn-primary" type="submit">Aceptar</button>  --}}
                    </div>
            </div>
        </div>
    </div>
</div>

   
@endsection
@extends('layouts.app')