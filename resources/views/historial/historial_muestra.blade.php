@extends('layouts.footer')



@section('content')

<div class="container">
    <div class="row">
        <div class="col-16 col-lg-12 offset-lg-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="h4">Listado de Informe</h1>
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
                      <th>Informe</th>
                      
                    </tr></thead>
                    @if($muestra->count())
                        @foreach($muestra as $muestras)
                          @foreach($determinacion as $det)
                    <tbody>
                    <tr>
                      <td>-</td>
                        <td>{{ $muestras->id }}</td>
                            
                        <td>{{ $det->categoria }}</td>
                        <td>{{ $det->estado }}</td>
                       
                    
                        <td><a href="{{ url('muestra/ver/informe/'.$muestras->id) }}" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver </button></a></td>
                        {{-- <td><a href="crear_reporte_porpais/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td> --}}
                    </tr>
                  </tbody>
                    @endforeach
                </table>
                </div><!-- /.box-body -->
                    
                 @endforeach
                        @else
                        <tr>
                            <td colspan="10">No hay Muestras registradas !!</td>
                        </tr>
                    @endif
              </div>
        </div>
    </div>
</div>

 @endsection
@extends('layouts.app')