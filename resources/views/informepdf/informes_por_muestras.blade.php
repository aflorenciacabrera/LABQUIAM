<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-1 offset-lg-1">
                   <img src="{{asset('img/icono quimica.png')}}" width="70" />       
                </div>
                 <div class="col-md-4 offset-lg-0 " >
                     <br><br>
                   {{-- <img src="{{asset('img/logo_facena.png')}}" width="100" />   --}}
                     <font face="  " size="5"> {{ config('app.name', 'Laravel') }}</font><span> </span> 
                     <br>
                     <font face="Britannic Bold" size="4"> <span>Laboratorio de Quimica Ambiental </span></font> 
                     <br>
                     <font face="Britannic Bold" size="4"> <span>FACENA - UNNE </span></font> 
                </div>  
            </div>
            <hr>
               @foreach($informe as $muestras)
                <label for="">Análisis Solicitado por: </label>
                <br>
                <label for="">Objeto del Análisis:</label> 
                <br>
                <br>
                  @foreach($tipomuestras as $tipomuestra)
                <label  for="">Tipo:</label> {{ $tipomuestra->name }} <label for="">Muestra:</label> 
                  @endforeach
                <br>
                 @foreach($procedencias as $procedencia)
                 <label  for="">Procedencia:</label> {{ $procedencia->name }}
                 @endforeach
                <br>
                <label  for="">Sitio de extracción:</label>
                <br>
                <label for="">Fecha de extracción:</label> {{ $muestras->fecha_toma_muestra }}
                <br>
                <label for="">Hora:</label>  <label for="">Temp:</label>
                <br>
            <div class="text-center">
                <label for=""> <u> ANALISIS FISICO-QUIMICO</u></label>
            </div>

            <div class="text-center">
                <label for=""> <u> ANALISIS BACTERIOLOGICO </u></label>
            </div>
            
            <br>
            <label for="">Observación:</label>  {{ $muestras->observacion}}
            @endforeach
            <br>
          {{-- ***************** Fecha del dia actual ********************** --}}
            Corrientes,
            <script>
                var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                var f=new Date();
                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
            </script>
        </div>  
    </div>
</body>

<style>
.line{
    padding : 10px 10px 10px 10px;
}
</style>