<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Bienvenido! AVONN</title>
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/bootstrap-theme.css">
	<link rel="stylesheet" href="../../css/jquery-ui.css">
	<link rel="stylesheet" href="../../css/style.css">
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/jquery-ui.min.js"></script>

	<!-- este es el delay de la pagina -->
	<?php include("../../inc/displayDelay.inc"); ?>
	<!-- este es el delay de la pagina -->
	
	<style>
		.panelTop{
			background-color: #009687;
			color: #FFF;
		}
		.panel{
			border-color: #009687;
			font-size: 1.2em;
			background-color: rgba(255,255,255,.1);
			color: #b0b2ba;
		}
		.btnTeal{
			background-color: #009687;
			color: #FFF;
		}
		.btnTeal:hover{
			background-color: #007065;
			color: #E3E3E3;
		}

	</style>
</head>
<body>

	<div class="container">
	<div class="cuadroUno">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
					<img src="../../img/logo.svg" class="imgLogo">
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<div class="panel">
					  
						<div class="panel-heading panelTop">
							<div class="cuadroTitulo">
								<div class="cUnoTitulo">Iniciar sesión</div>
								<div class="cDosTitulo"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
							</div>
						</div>
					  <div class="panel-body">


					    <form action="verificar.php" method="post">
					    	<div class="form-group form-group-lg">
					    		<label for=""><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuario:</label>
    							<input type="text" name="txtUsuario" placeholder="Nombre de usuario..." class="form-control" required/>
					    	</div>
					    	<div class="form-group form-group-lg">
					    		<label for=""><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Password:</label>
    							<input type="password" name="txtPassword" placeholder="Password de usuario..." class="form-control" required/>
					    	</div>
					    	<br>
					    	<div class="form-group form-group-lg">
    							<input type="submit" value="Continuar" class="btn btn-lg btn-block btnTeal" />
					    	</div>
					    </form>


					  </div>
					</div>
		</div>
	</div>
	</div>
	</div>
</body>
</html>