@extends('layouts.footer')
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Inicio</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->hasRole('admin'))
                       
                         <div align="center">
                            <a  rol="button" href="{{url('admin/usuario')}}" class="btn btn-outline-primary btn-sm " > <i class="fa fa-plus"></i> Nuevo Técnico</a>
                            <a  rol="button" href="{{url('producto/agregar')}}" class="btn btn-outline-success btn-sm " > <i class="fa fa-plus"></i> Lista de Clientes</a>
                            {{-- <a  rol="button" href="{{url('producto/agregar')}}" class="btn btn-outline-warning btn-sm " > <i class="fa fa-plus"></i> Nuevo</a> --}}
                        </div>
                    @else
                        <div>Acceso usuario</div>
                    @endif
                    

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

