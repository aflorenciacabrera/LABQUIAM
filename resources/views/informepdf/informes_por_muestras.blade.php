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
                <label for="">Fecha de extracción:</label> {{ $informe->fecha_toma_muestra }}
                <br>
                <label for="">Hora:</label>  <label for="">Temp:</label>
                <br><br>
            {{-- <div class="text-center">
                <label for=""> <u> ANALISIS FISICO-QUIMICO</u></label>
            </div>

            <div class="text-center">
                <label for=""> <u> ANALISIS BACTERIOLOGICO </u></label>
            </div> --}}
            {{-- <div class="text-center" >
                <label for=""> <u> ANALISIS:</u></label>
            </div> --}}
             <table class="table table-hover"> 
                <thead><tr>
                <th><label for=""> <u> ANÁLISIS</u></label></th>
                <th></th>
                 <th>VALORES CAA</th>
                </tr>
                </thead>
                    <tbody>
                    <tr>
                        <td> @foreach($determinacion as $det)
            
            @switch($det->determinacion)
            
                @case('alcalinidad')
                   *<label for="">Alcalinidad </label> (mg/L): {{($det->datos->resultado)}}
                    <br>
                @break
           
                @case('amonio')
                   *<label for="">Amonio </label> [NH4+ ] (mg/L) : {{($det->datos->resultado)}}
                    <br>
                @break
           
                 @case('cloruro')
                    *<label for="">Cloruro</label> (mg/L) : {{($det->datos->resultado)}}
                    <br>
                @break
            
                @case('dureza')
                        *<label for="">Dureza</label> (mg/L) : {{($det->datos->dureza)}}
                         <br>
                        *<label for="">Calcio </label>(mg/L) : {{($det->datos->calcio)}}
                         <br>
                        *<label for="">Magnesio</label> (mg/L) : {{($det->datos->magnesio)}}
                         <br>
                @break
           
                @case('fosfatos')
                        *<label for="">Fosfato </label>[PO43- ] (mg/L) : {{($det->datos->resultado)}}
                         <br>
                @break
         
                @case('hierro')
                        *<label for="">Hierro</label> [Fe3+ ] (mg/L) : {{($det->datos->resultado)}}
                         <br>
                @break
           
                @case('nitrato')
                        *<label for="">Nitrato </label> [NO3- ] (mg/L) : {{($det->datos->resultado)}}
                         <br>
                @break
          
                @case('nitrito')
                        *<label for="">Nitrito </label> [NO2- ] (mg/L) : {{($det->datos->resultado)}}
                         <br>
                @break
         
                @case('oxigeno')
                        *<label for="">Oxigeno</label> [Oxígeno Disuelto] (mg/L) : {{($det->datos->resultado)}}
                         <br>
                @break
           
                @default
                    
            @endswitch
           
             @endforeach</td>

                        <td></td>
                        
                       
                    </tr>
                  </tbody></table>
           
            <br>
            <label for="">Observación:</label>  {{ $informe->observacion}}
           
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
 <footer class="footer p-t-1" >
    <div class="container">
        <div class="copyright company-name text-center"> </div>
        <div class="row">
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center ">
                <p><u>  LABQUIAM: Laboratorio de Quimica Ambiental</u> </p>
                    Dirección: Avenida Libertad Nº 5450 - 3400 Corrientes Argentina.
                    Tel: 03783-457996 int. 103
                <p class="h6">E-mail: labquiam@exa.unne.edu.ar</p>
            </div>
           
        </div>
    </div>
    <br>

</footer>
<style>
    .footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
    }
    footer {
        background-color: #D7DBDD;
    }

    /* Efecto Iconos Sociales*/
    .social:hover {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1);
    }
    .social {
        -webkit-transform: scale(0.8);
        /* Browser Variations: */
        -moz-transform: scale(0.8);
        -o-transform: scale(0.8);
        -webkit-transition-duration: 0.5s;
        -moz-transition-duration: 0.5s;
        -o-transition-duration: 0.5s;
    }
     /* Espacio de Footer */
    #justpushtobottom {
        height: 10vh;
    }
    /* Colores Iconos Sociales*/
    #social-fb:hover {
        color: #3B5998;
    }
    #social-tw:hover {
        color: #4099FF;
    }
    #social-gp:hover {
        color: #d34836;
    }
    #social-em:hover {
        color: #f39c12;
    }
    </style>