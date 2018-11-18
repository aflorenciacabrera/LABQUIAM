

@extends('layouts.footer')
@extends('layouts.perfil')
@extends('layouts.app')
 @section('content')    
 
 
        @if(Auth::user()->hasRole('admin'))
           
         
            
        @endif
           
        @if(Auth::user()->hasRole('tecnico'))
          
          

        @endif

        @if(Auth::user()->hasRole('cliente'))
           
        

        @endif

        

       

@endsection
