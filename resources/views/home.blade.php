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
                        <div>Acceso como administrador</div>
                    @if (Auth::user()->hasRole('tecnico'))
                      
                    @else
                        <div>Acceso Cliente</div>
                    @endif
                    

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

