@extends('layouts.footer')
@extends('layouts.app')
@extends('layouts.menu')
@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Panel de Cliente</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->hasRole('admin'))
                       
                         <div align="center">
                           
                             <a  class="btn btn-sm btn-default"  role="button" href="{{url('/perfil') }}" >Perfil <i class="glyphicon glyphicon-user"></i></a>
                        </div>
                  
                    @endif
                    

                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection
