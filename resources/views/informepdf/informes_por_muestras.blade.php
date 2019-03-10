<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-lg-2">
                   <img src="{{asset('img/logo.png')}}" width="300" />       
                </div>
            </div>

            <div class="row col-md-12">
		<div id="informe-new-info">
			<div class="well">
           <div class="col-md-4 offset-lg-2">
                   <img src="{{asset('img/logo.png')}}" width="300" />       
                </div>     
				<div class="input-group col-md-10 line">
                    <span class="input-group-addon">Nombre</span>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" />
                </div>
   			    <div class="input-group col-md-10 line">
                    <span class="input-group-addon">Número de pestañas</span>
                    <input type="text" name="numPestanyes" class="form-control" placeholder="999" />
                </div>
                
                	<div class="form-group line">
						<div class="col-md-offset-4 col-md-4">
							<p class="text-center">
								<button id="btn-save-up" type="submit" class="btn btn-primary">
									Guardar
								</button>
								<a href="${pageContext.request.contextPath}/consulta/pages/1"
									id="btn-back-up" class="btn btn-default"> 
									Atrás
								</a>
							</p>
						</div>
					</div>
                
			</div>
		</div>
    </div>
        </div>
    </div>
</body>
<hr>
<style>

.line{
    padding : 10px 10px 10px 10px;
}
</style>