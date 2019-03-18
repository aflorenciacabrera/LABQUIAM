
@extends('layouts.footer')
@section('content')
<div class="col-md-10 col-md-offset-0" class="text-center" > 
	<div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
            <h1 class="gallery-title text-center">Selección de Muestra para Corte</h1> 
     </div>
        <div align="center">
        	<form method="POST" action="{{url('viales/corte')}}">
						@csrf
		    <select name="muestra_id" id="muestra" >
				
				<option value="">Seleccionar Muestra</option>
				@foreach ($muestras  as $muestra)
					<option value="{{$muestra->id}}">{{$muestra->muestra}}</option>
				@endforeach
				</select>
				{{-- <div class="pull-right"><a href=""  class="btn  btn-success  right" type='button'  data-toggle="modal" >  Aceptar </a></div>  --}}
				
		    {{-- <select name="" id="">
		    	<option value="">seleccionar Vial</option>
		    </select> --}}
		   
		   	<label for=""></label>
               <input   type="number"  name="cantidad" min="0" max="10000" step="1" placeholder="Corte" />

            {{-- <a href="#edit"  class="btn  btn-info  right" type='button'  data-toggle="modal" >Completar datos <i class="glyphicon glyphicon-edit"></i></a> --}}

             <button class="pull-right" type="submit" class="btn btn-primary">
                                {{ __('Aceptar') }}
                </button>
        </div>

       
<h3 class="page-header">Datos de los viales</h3>
        
        <div class="gallery center col-md-18 col-md-offset-0">
    <div class="row">
		
    	    <h1 class="page-header"></h1>
            <table class="table table-stripped table-bordered">
			      <thead>
			        <tr>
			         
			          <th>Naturaleza</th>
			         
			          <th>Concentración</th>
			          <th>Fecha de Entrada</th>
			          <th>Fecha de Salida</th>
			          <th>Órgano</th>
			          <th>Diagnóstico</th>
			          
			        </tr>
			      </thead>
			      <tbody>
					
			        <tr>
			         
			          	  <td><input type="text" name="naturaleza" class="form-control"></td>
				          
				          <td><input type="text" name="concentracion" class="form-control"></td>
				          <td><input type="date" name="fecha_entrada" class="form-control"></td>
				          <td><input type="date" name="fecha_salida" class="form-control"></td>
				          <td><input type="text" name="organo" class="form-control"></td>
				          <td><input type="text" name="diagnostico" class="form-control"></td>
				         
				         
			        </tr>

			      
			      </tbody>
    		</table>
			
	
	</div>
</div>

 <h3 class="page-header">Viales</h3>
        <div class="gallery center col-md-18 col-md-offset-0">
    <div class="row">
		
			  @if($viales->count())  
			
			<h1 class="page-header"></h1>
			
			
            <table class="table table-stripped table-bordered">
			      <thead>
			        <tr>
			          <th>#</th>
			          <th>Naturaleza</th>
			          {{-- <th>Cantidad</th> --}}
			          <th>Concentración</th>
			          <th>Fecha de Entrada</th>
			          <th>Fecha de Salida</th>
			          <th>Órgano</th>
			          <th>Diagnóstico</th>
			          <th>Ceder a Receptor</th>
			          <th>Editar</th>
			        </tr>
			      </thead>
			      <tbody>
					
					@foreach ($viales as $vial)
				
			        <tr>
			          <th scope="row">V <label for="">{{$vial->id}}</label></th>
			          	  <td> {{$vial->naturaleza}}</td>
						 <td>{{$vial->concentracion}}</td>
						  <td>{{$vial->fecha_entrada}}</td>
						   <td>{{$vial->fecha_salida}}</td>
							<td>{{$vial->organo}}</td>
							  <td>{{$vial->diagnostico}}</td>
				          
						 <td><button class="editbtn">Ceder</button></td>
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
						
	
					
				
<script>	
$(document).ready(function(){
    $('.editbtn').click(function(){
        $(this).html($(this).html() == 'Guardar' ? 'Ceder' : 'Guardar');
    });
});
       </script>
@endsection
@extends('layouts.app')