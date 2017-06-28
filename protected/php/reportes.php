<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

include("seguridad.php");

date_default_timezone_set('America/Mexico_City');
$prinDeMes = date("Y-m-01");
$diaActual = date("Y-m-d");

 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Anteción Ciudadana</title>
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/bootstrap-theme.css">

	<link rel="stylesheet" href="../../css/jquery-ui.css">
	<script src="../../js/jquery.min.js"></script>
	<script src="../../js/jquery-ui.min.js"></script>

	<script type="text/javascript" src="../../js/bootstrap.js"></script>
	
	<!-- este es el delay de la pagina -->
	<?php include("../../inc/displayDelay.inc"); ?>
	<!-- este es el delay de la pagina -->
	<style>
		
		input[type=text],[type=number],[type=hidden]{
			text-transform: uppercase;
		}
		textarea{
			text-transform: uppercase;
		}
		.resBtn{
			background-color: #562CDF;
			color: #FFF;
		}
		.resBtn:hover{
			background-color: #3B008B;
			color: #FFF;
		}

		.btnVerdeF{
			background-color: #88c441;
			color: #FFF;
			width: 50%;
		}
		.btnVerdeF:hover{
			background-color: #6FA232;
			color: #FFF;
		}
		.txtRosa{
			color: #eb1561;
		}
		.txtVerde{
			color: #009687;
		}
		.panel{
            border-color: #009687;
        }
        .panelTop{
            background-color: #009687;
            color: #fff;
        }
        .btnVerde{
            background-color: #009687;
            color: #FFF;
        }
        .btnVerde:hover{
            background-color: #006D62;
            color: #FFF;
        }
        .btnAzul{
            background-color: #45d0e3;
            color: #FFF;
            width: 100%;
        }
        .btnAzul:hover{
            background-color: #36A2B1;
            color: #FFF;
        }
        .btnRojo{
        	background-color: #e64759;
            color: #FFF;
        }
        .btnRojo:hover{
        	background-color: #932c38;
            color: #FFF;
        }
        .backGrey{
        	background-color: #D4D4D4;
        	-webkit-border-radius: 8px;
        	        border-radius: 8px;
        	padding: 0px 13px;
        }
	</style>

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 panel panel-success">
			<h1>Reportes</h1>
			<br>
			<h3>Anteción Ciudadana</h3>
			<form action="repAten.php" method="post" class="backGrey">
			 <div class="form-group">
				<div class="row">
  					<div class="col-md-4">
  					<br>
  					
						<label for="">Del día:</label>
						<input type="date" name="txtDiaUno" value="<?php echo $prinDeMes; ?>" class="form-control"/>

					</div>
					<div class="col-md-4">
					<br>
						<label for="">Al Día:</label>
						<input type="date" name="txtDiaDos" value="<?php echo $diaActual; ?>" class="form-control"/>
					</div>
					<div class="col-md-4">
					<br>
						<label for="">-</label>
						<input type="submit" value="Continuar..." class="form-control btnVerde"/>
					</div>
					</div>
				</div>
				<br>
			</form>
			<br>
			<h3>Vales</h3>

			<form action="repVales.php" method="post" class="backGrey">
			 <div class="form-group">
				<div class="row">
  					<div class="col-md-4">
  					<br>
  					
						<label for="">Del día:</label>
						<input type="date" name="txtDiaUno" value="<?php echo $prinDeMes; ?>" class="form-control"/>

					</div>
					<div class="col-md-4">
					<br>
						<label for="">Al Día:</label>
						<input type="date" name="txtDiaDos" value="<?php echo $diaActual; ?>" class="form-control"/>
					</div>
					<div class="col-md-4">
					<br>
						<label for="">-</label>
						<input type="submit" value="Continuar..." class="form-control btnVerde"/>
					</div>
					</div>
				</div>
				<br>
			</form>
			<br>	

					<a href="menu.php" ><div class="btn btn-lg btnAzul"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Regresa</div>
					</a>
					<br>
							<br>

					<a href="destruir.php" ><button class="btn btn-lg btn-block btnRojo">Cerrar sesion <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></button>
							</a>
							<br>
		</div>
	</div>
</div>


<!-- ######## Aqui comienza Autocompletado ############ -->
    	
<script>
$( "#autoSeccion" ).autocomplete({
  source: "secciones.php"
});
$( "#autoArea" ).autocomplete({
  source: "areas.php"
});
</script>

<!-- ######## Aqui comienza Autocompletado ############ -->



</body>
</html>