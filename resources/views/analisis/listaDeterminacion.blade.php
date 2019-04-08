@extends('layouts.footer')
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-16 col-lg-12 offset-lg-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="h4">Listado de Analisis</h1>
                     <div class="input-group pull-right" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Buscar">
                      <div class="input-group-btn">
                        <button class="btn btn-sl btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                </div>
                
                <div class="box-body table-responsive no-padding text-center">
                  <table class="table table-hover">
                   
                    <thead><tr>
                      <th>ID</th>
                      <th>Muestra</th>
                       <th>Categoria</th>
                      <th>Estado</th>
                      <th>ver</th>
                      {{-- <th>descargar</th> --}}
                    </tr></thead>
                   
                    
                          @foreach($determinacion as $det)
                          @if($det->count())
                    <tbody>
                    <tr>
                        <td></td>
                        <td>{{ $det->id }}</td> 
                        <td>{{ $det->categoria }}</td>
                        <td>{{ $det->estado }}</td>
                        <td>{{ $det->determinacion }}</td>
               
                     {{-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
        <a href="#ventana"   class="text-center btn btn-default " data-toggle="modal" > ver más</a>
    </div> --}}
                        <td><a href="#ventana{{$det->id}}"  data-toggle="modal"><button class="btn btn-block btn-primary btn-xs" >Ver</button></a></td>
                        {{-- <td><a href="crear_reporte_porpais/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td> --}}
                    </tr>
                  </tbody>

                    <div class="modal fade in" id="ventana{{$det->id}}" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- header de la ventana-->

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title"> </h4>
                                    </div>
                                     <!-- contenido de la ventana de la ventana-->
                                            <!-- panel de capacidad-->
                                    <div class="modal-body"> 
                                     
              @if ($det->muestra_id)
                   @foreach($determinacion as $det)
            
                              @switch($det->determinacion)
            
                @case('alcalinidad')
                   *<label for="">Alcalinidad </label> (mg/L): {{($det->datos->resultado)}}
                    <br>
                @break
           
                @case('amonio')
                   *<label for="">Amonio </label> [NH4+ ] (mg/L) : {{($det->datos->resultado)}}
                    <br>
                @break
           
                 @case('cloruro')
                    *<label for="">Cloruro</label> (mg/L) : {{($det->datos->resultado)}}
                    <br>
                @break
            
                @case('dureza')
                        *<label for="">Dureza</label> (mg/L) : {{($det->datos->dureza)}}
                         <br>
                        *<label for="">Calcio </label>(mg/L) : {{($det->datos->calcio)}}
                         <br>
                        *<label for="">Magnesio</label> (mg/L) : {{($det->datos->magnesio)}}
                         <br>
                @break
           
                @case('fosfatos')
                        *<label for="">Fosfato </label>[PO43- ] (mg/L) : {{($det->datos->resultado)}}
                         <br>
                @break
         
                @case('hierro')
                        *<label for="">Hierro</label> [Fe3+ ] (mg/L) : {{($det->datos->resultado)}}
                         <br>
                @break
           
                @case('nitrato')
                        *<label for="">Nitrato </label> [NO3- ] (mg/L) : {{($det->datos->resultado)}}
                         <br>
                @break
          
                @case('nitrito')
                        *<label for="">Nitrito </label> [NO2- ] (mg/L) : {{($det->datos->resultado)}}
                         <br>
                @break
         
                @case('oxigeno')
                        *<label for="">Oxigeno</label> [Oxígeno Disuelto] (mg/L) : {{($det->datos->resultado)}}
                         <br>
                @break
           
                @default
                   
            @endswitch  
            @endforeach
                   @endif                       

                <div class="row">
                <div class="col-md-8">
                 <div class="form-group"> 
                   
                                    </div>
                                            
                                     <!-- footer de la ventana-->
                                    <div class="modal-footer">
                                        <div class="  col-lg-offset-2" >


                                            <div class="row">
                        
                        {{--Boton de eliminar postulacion--}}
                        <div class="   col-lg-offset-7" >
                         <div class="col-md-1">
                          
                                 
                            </div>

                                {{-- end col-lg --}}
                         </div>
                        {{-- end col --}}
                        </div>
                        {{-- end row --}}
               

                    </div>
                </div>
            </div>
        </div>
    </div> </div></div></div>
            
                      @else
                        <tr>
                            <td colspan="10">No hay Muestras registrados !!</td>
                        </tr>
                    @endif
                     @endforeach
                  
                </table>
                </div><!-- /.box-body -->
                    
               
              </div>
        </div>
    </div>
</div>
   
 @endsection
 