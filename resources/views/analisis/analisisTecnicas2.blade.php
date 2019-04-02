
@extends('layouts.footer')
@section('content')
<div class="container">
    <div class="row">
        <div class=" col-md-13 offset-lg-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="h4"> Técnicas para Análisis </h1>

                    <div class="dropdown">
                        <a class="btn btn-white dropdown-toggle"
                            role="button"
                            id="dropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            Tipo de Análisis
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/analisis/agua/potable">Agua potable</a>
                            <a class="dropdown-item" href="/analisis/agua/estancada">Agua Estancada</a>
                           
                        </div>
                    </div>
                </div>
                 <div class="card-body">
                       
                        <div align="center">
                          
                             <form method="POST" action="{{url('analisis/altatecnica')}}">
                            @csrf
                            <select name="muestra_id" id="muestra" >
                                <option value="">Seleccionar Muestra</option>
                                @foreach ($muestras as $muestra)
                                <option value="{{$muestra->id}}">{{$muestra->id}}</option>
                                @endforeach
                            </select>
                               {{-- <button class="btn btn-primary" type="submit">Aceptar</button> --}}
                        <button class="pull-right" type="submit" class="btn btn-primary active">
                        {{ __('Aceptar') }}
                        </button>
                        </div>
                
                  </div>


<div class="col-md-10 col-md-offset-1" class="text-center" > 
	   
<h3 class="page-header">Datos de Análisis</h3>
        
        <div class="gallery center col-md-18 col-md-offset-1">
    <div class="row">
		
    	    <h1 class="page-header"></h1>
            <table class="table table-stripped table-bordered">
			      <thead>
			        <tr>
			         
			          <th>categoria</th> 
			          <th>Determinación</th>
			          <th>botella</th>
			          <th>volumen_gastado</th>
			          <th>factor_dilucion</th>
                      <th>volumen_calculado</th>
                       <th>resultado</th>
                        <th>Estado</th>
			          
			        </tr>
			      </thead>
			      <tbody>
					
			        <tr>
			         
			          	  <td><input type="text" name="categoria" id="categoria"  class="form-control"></td>
				          <td><input type="text" name="determinacion" class="form-control"></td>
				          <td><input type="number" name="botella" class="form-control"></td>
				          <td><input type="text" name="volumen_gastado" class="form-control"></td>
				          <td><input type="text" name="factor_dilucion" class="form-control"></td>
				          <td><input type="text" name="volumen_calculado" class="form-control"></td>
                           <td><input type="text" name="resultado" class="form-control"></td>
                             <td><input type="text" name="Estado" class="form-control"></td>
				         
			        </tr>

			      
			      </tbody>
    		</table>
			
	
	</div>
</div>

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
			          <th>botella</th>
			          <th>volumen_gastado</th>
			          <th>factor_dilucion</th>
			          <th>volumen_calculado</th>
			          <th>Resultado</th>
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
						  <td>{{$vial->botella}}</td>
						   <td>{{$vial->volumen_gastado}}</td>
							<td>{{$vial->factor_dilucion}}</td>
							  <td>{{$vial->volumen_calculado}}</td>
				           <td>{{$vial->Resultado}}</td>
						 <td><button class="editbtn">Pendiente</button></td>
						  <td><a href="{{ url('viales/corte/editar/'.$vial->id) }}"  class="btn  btn-warning  right" type='button'   >   <i class="glyphicon glyphicon-edit"></i></a>
							  </td>

			        </tr>	
					@endforeach
				
					@else
						<tr>
							<td colspan="8">No hay registrados de viales !!</td>
						</tr>
							
			        	@endif
			      </tbody>
    		</table>
			 
	
	</div>
</div>
 {{-- <div align="center">
        	
		 <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="">
		    Guardar</button> 
</div> --}}
</div></form>
						
    

                    <div class="card-footer text-muted d-flex justify-content-end">

                        <div class="col-sm-11 input-column">
                          <a href="{{ url('muestra/lista') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-light active ">Cancelar</a>  </div>
                        {{-- <a class="btn btn-light mr-2" type="reset">Cancelar</a> --}}
                        {{-- <button class="btn btn-primary" type="submit">Aceptar</button> --}}
                    </div>
               
            </div>
        </div>
    </div>
</div>

</form>
					
				
<script>	
$(document).ready(function(){
    $('.editbtn').click(function(){
        $(this).html($(this).html() == 'Listo' ? 'Pendiente' : 'Listo');
    });
});
       </script>
@endsection
@extends('layouts.app')