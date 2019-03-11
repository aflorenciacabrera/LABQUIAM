
@extends('layouts.footer')
@extends('layouts.menu')
@section('content')
{{-- <hr> --}}

@if(session('status'))
      <div class="alert alert-success text-uppercase text-center" role="alert">
          <strong>{{session('status')}}</strong>
         
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
     </div>
@endif 
            <div class="row justify-content-center">
                     <img src="{{asset('img/icono quimica.png')}}" width="150" />  
            </div>
            @endsection

@extends('layouts.app')
