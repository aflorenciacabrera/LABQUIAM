@extends('layouts.footer')
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Panel </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->hasRole('admin'))
                       
                         <div align="center">
                            <a  rol="button" href="{{url('admin/usuario')}}" class="btn btn-outline-primary btn-sm " > <i class="fa fa-plus"></i> Nuevo Técnico</a>
                            <a  rol="button" href="{{url('admin/listado/usuario')}}" class="btn btn-outline-info btn-sm " > <i class="fa fa-plus"></i> Lista de Técnico</a>
                            <a  rol="button" href="{{url('admin/listado/cliente')}}" class="btn btn-outline-success btn-sm " > <i class="fa fa-plus"></i> Lista de Clientes</a>
                            {{-- <a  rol="button" href="{{url('producto/agregar')}}" class="btn btn-outline-warning btn-sm " > <i class="fa fa-plus"></i> Nuevo</a> --}}
                             <a  class="btn btn-sm btn-default"  role="button" href="{{url('/perfil') }}" >Perfil <i class="glyphicon glyphicon-user"></i></a>
                        </div>
                    @elseif(Auth::user()->hasRole('cliente'))
                       <div>Acceso Cliente</div>
                        <a  class="btn btn-sm btn-default"  role="button" href="{{url('/perfil') }}" >Perfil <i class="glyphicon glyphicon-user"></i></a>
                    @else
                        <div>Acceso Usuario</div>
                         <a  class="btn btn-sm btn-default"  role="button" href="{{url('/perfil') }}" >Perfil <i class="glyphicon glyphicon-user"></i></a>
                    @endif
                    

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

