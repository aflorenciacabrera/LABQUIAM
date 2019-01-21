

@extends('layouts.footer')

@section('content')

<div class="container">
    
{{-- Panel de lista de muestras  --}}
<div class="row">
    <div class="col-md-14 col-md-offset-">
        <div class="panel-body">
            {{-- Titulo --}}
            <div class="pull-left"><h3>Lista de Muestras</h3></div>
            {{-- contenido de la tabla --}}
            <div class="table-container">
                <table id="mytable" class="table table-bordred table-striped">
                    {{-- Lista de la tabla --}}
                    <thead>
                        <th>Fecha de ingreso</th>
                        <th>Fecha de toma</th>
                        <th>procedencia</th>
                        <th> tipo de muestra </th>
                        <th>Remitida</th>
                        <th>Tomada</th>
                        <th>tipo de analisis</th> 
                        <th>Descripcion </th> 
                        <th>Detalle </th> 
                        <th>Eliminar</th>
                        <th>Ver</th>
                    </thead>
                    <tbody>
                       

                        @if($muestra->count())
                        @foreach($muestra as $muestras)
                        <tr>
                        <td>{{ $muestras->name }}</td>
                        <td>{{ $muestras->email }}</td>
                        <td>{{ $muestras->rol }}</td>
                        <td><button class="btn btn-info " nombre=""><i class="fa fa-check"></i></button></td>
                        <td>
                            <form method="post" action="{{ route('eliminarcuenta') }}">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}

                                <input type="hidden" name="id" value="{{$muestras->id}}">
                                <button class="btn  btn-danger" type="submit" >Eliminar  <i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8">No hay Muestras registrados !!</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>


@endsection

@extends('layouts.app')
