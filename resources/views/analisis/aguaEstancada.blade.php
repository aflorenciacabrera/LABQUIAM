@extends('layouts.footer')
@section('content')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
{{-- Alta de tecnico --}}
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="h4"> Técnicas para Análisis de Agua Estancada</h1>

                    <div class="dropdown">
                        <a class="btn btn-white dropdown-toggle"
                            role="button"
                            id="dropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            Tipo de Análisis
                        </a>

                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/analisis/agua/potable">Agua potable</a>
                            <a class="dropdown-item" href="/analisis/agua/estancada">Agua Estancada</a>
                           
                        </div>
                    </div>
                </div>
 
                    <div class="card-body">
                        @csrf
                        
                                
                               
                           
                       <div class="container ">
                    <div class="row">
                            <ul class="list-unstyled">
                            <li><label><input type="checkbox" class="all"> Todo</label></li>
                            <li><hr></li>
                            <li><label ><input type="checkbox" name="casual_dating"> Opción 1</label></li>
                           <li><label><input type="checkbox" name="casual_dating" checked> Opción 2</label></li>
                           <li><label><input type="checkbox"  name="casual_dating"> Opción 3</label></li>
                            <li><label><input type="checkbox" name="casual_dating"> Opción 4</label></li>
                            <l<li><label><input type="checkbox" name="casual_dating" checked> Opción 5</label></li>
                           <li><label><input type="checkbox" name="casual_dating"> Opción 6</label></li>
                           <li><label><input type="checkbox" name="casual_dating" checked> Opción 7</label></li>
                            <li><label><input type="checkbox" name="casual_dating"> Opción 8</label></li>
                           <li><label><input type="checkbox" name="casual_dating" checked> Opción 9</label></li>
                           <li><label><input type="checkbox" name="casual_dating"> Opción 10</label></li>
                            </ul>
                    </div>
                </div>
            

                      

                    <div class="card-footer text-muted d-flex justify-content-end">

                        <div class="col-sm-11 input-column">
                          <a href="{{ url('analisis/tecnica') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-light active ">Atras</a>  </div>
                        {{-- <a class="btn btn-light mr-2" type="reset">Cancelar</a> --}}
                        <a class="btn active btn-info" href="{{ url('analisis/determinaciones') }}"   role ="button">Siguiente</a>
                    </div>
               
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>
     
<script>
  $('.all').on('click', function(e){
    $this = this;  
    $.each($(this).parents('ul').find('input'), function(i, item){
      $(item).prop('checked', $this.checked);
    });
  });
</script>


@endsection
@extends('layouts.app')

