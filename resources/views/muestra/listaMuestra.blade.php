

@extends('layouts.footer')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center"> <h3 >Muestas</h3></div>
                <div class="card-body">
{{-- ********************************************************************************************************** --}}
                        <div class="col-md-16 col-md-offset-0" class="text-center" >      
                            
                            <div align="center">
                                
                                <a  rol="button" href="{{url('muestra/nuevo')}}" class="btn btn-outline-primary btn-sm " > <i class="fa fa-plus"></i> Nueva muestra</a>
                            </div>
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
        <h4>Lista de Muestras</h4>
        
        <div class="table-responsive text-center">        
               <table id="mytable" class="table table-bordred table-striped">                 
                   <thead>
                       <th>N° de Muestra</th>              
                        <th>Fecha de ingreso</th>
                        <th>Fecha de toma</th>
                        <th>Procedencia</th>
                        <th>Tipo de muestra </th>
                        <th>Remitida/Tomada</th>
                        <th>Tipo de analisis</th> 
                        <th>Eliminar</th>
                        <th>Ver</th>
                        <th>Operación</th>
                    </thead>
                        <tbody> 
                              @if($muestra->count())
                        @foreach($muestra as $muestras)
                            <tr>
                                <td>{{ $muestras->id }}</td>
                                <td>{{ $muestras->fecha_ingreso }}</td>
                                <td>{{ $muestras->fecha_toma_muestra }}</td>
                                <td>{{ $muestras->procedencia }}</td>
                                <td>{{ $muestras->tipo_muestra }}</td>
                                <td>{{ $muestras->remitida_tomada }}</td>
                                <td>{{ $muestras->tipo_analisis }}</td>
                               
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><a class="btn btn-outline-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fa fa-trash-o"></i></a></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a class="btn btn-outline-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fa fa-edit"></i></a></p></td>
                                 <form method="post" action="{{ route('eliminarcuenta') }}">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}

                                <input type="hidden" name="id" value="{{$muestras->id}}">
                                {{-- <button class="btn  btn-danger" type="submit" >Eliminar  <i class="fa fa-trash-o"></i></button> --}}
                            </form>
                             <td><p data-placement="top" data-toggle="tooltip" title="Selecionar Técnicas a Implementar"><a class="btn btn-outline-info btn-xs" href="{{url('analisis/tecnica')}}" > <i class="fa fa-hand-o-up"></i></a></p></td>
                            </tr> 

                        @endforeach
                        @else
                        <tr>
                            <td colspan="10">No hay Muestras registrados !!</td>
                        </tr>
                    @endif
                        </tbody>
                </table>
                 
{{-- ***********************Pagination********************************* --}}
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
            </div>
              </div>   
        </div>
	</div>
</div>
{{-- ***********************Modal de Edit********************************* --}}
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
           
            <h4 class="modal-title custom_align" id="Heading">Ver detalles de la Muestra</h4>
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
           <h4 class="modal-title custom_align" id="Heading">Eliminar Producto</h4>
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-times" aria-hidden="true"></span></button>
        </div>
        <div class="modal-body">
        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Está seguro que desea Eliminar el producto?</div> 
        </div>
        <div class="modal-footer ">
            <button type="button" class="btn btn-success" ><span class="fa fa-ok-sign"></span> Yes</button>
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

@endsection

@extends('layouts.app')
