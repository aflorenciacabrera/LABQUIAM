{{-- ********************************** Importación de Bootstrap ******************************************** --}}
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}

{{-- ********************************** Estilos ******************************************** --}}
<style>
    .footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
    }
    footer {
        background-color: #D7DBDD;
    }
    /* Espacio de Footer */
    #justpushtobottom {
        height: 10vh;
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

    {{-- Espacio de footer para enviarlo mas abajo --}}
    <div id="justpushtobottom">  </div>

{{-- ********************************** Footer  ****************************************** --}}
 <footer class="footer p-t-1" >
        <div class="container">
            <div class="copyright company-name text-center"> </div>
            <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center ">
                    <p><u>  LABQUIAM: Laboratorio de Quimica Ambiental</u> </p>
                      Dirección: Avenida Libertad Nº 5450 - 3400 Corrientes Argentina.
                        Tel: 03783-457996 int. 103
					<p class="h6">E-mail: labquiam@exa.unne.edu.ar</p>
				</div>
				</hr>
			</div>
        </div>
        <!-- /Iconos Sociales/ -->
        <div class="container">
            <hr>
                <div class="text-center center-block">
                    <p class="txt-railway"></p>
                        <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                        <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                        <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                        <a href="mailto:labquiam@exa.unne.edu.ar"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
                </div>
        </div>
    </footer>
