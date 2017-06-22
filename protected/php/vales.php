<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

include("seguridad.php");

date_default_timezone_set('America/Mexico_City');
$dia = date("d-m-Y");
$hora = date("g:i:s a");

$con = new SQLite3("../data/aten.db") or die("Problemas para conectar");
$cs = $con -> query("SELECT COUNT(folioVales), MAX(folioVales) FROM datosVales");
while ($resul = $cs -> fetchArray()) {
            $count=$resul[0];
            $max=$resul[1];
        }
        if ($count == 0) {
            $numFolio="V0001";
        }else{
            $numFolio='V'.substr((substr($max, 1)+ 10001), 1);
        }

$con -> close();

$con2 = new SQLite3("../data/usuarios.db") or die("Problemas para conectar");
$cs2 = $con2 -> query("SELECT nombre, aPaterno, aMaterno FROM login WHERE usuario = '$_SESSION[usuario]'");
while ($nomUsuario = $cs2 -> fetchArray()) {
            $nombre = $nomUsuario['nombre'];
            $aPaterno = $nomUsuario['aPaterno'];
            $aMaterno = $nomUsuario['aMaterno'];
        }
$nombreCompleto = $nombre." ".$aPaterno." ".$aMaterno;   

$con2 -> close();

 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Vales Anteción Ciudadana</title>
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
            width: 48%;
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
	</style>

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 panel panel-success">
			<h1>Vales</h1>
			<br>
			<form action="insertarVale.php" method="post">
			 <div class="form-group">
				<div class="row">
  					<div class="col-md-4">
  					<br>
						<label for="">Folio:</label>
						<input type="hidden" name="txtFolio" placeholder="Folio" class="form-control" value="<?php echo $numFolio; ?>"/>
						<input type="text" placeholder="Folio" class="form-control" value="<?php echo $numFolio; ?>" disabled/>
					</div>
						
					<div class="col-md-4">
					<br>
						<label for="">Fecha:</label>
						<input type="text" name="txtFecha" placeholder="Fecha" class="form-control" value="<?php echo $dia; ?>" />
					</div>
						
					<div class="col-md-4">
					<br>
						<label for="">Hora:</label>
						<input type="text" name="txtHora" placeholder="Hora" class="form-control" value="<?php echo $hora; ?>" />
					</div>
						
					<div class="col-md-6">
					<br>
						<label for="">Sección:</label>
						<input type="text" name="txtSecc" size="4" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="Sección..." id="autoSeccion" autocomplete="on" class="form-control" />
					</div>
						
				</div>
				<br>
				<label for="">Nombre:</label>
				<input type="text" name="txtNombre" placeholder="Nombre..." class="form-control" required/>
				<br>
				<label for="">Domicilio:</label>
				<input type="text" name="txtDom" placeholder="Domicilio..." class="form-control"/>
				
					<div class="row">
						<div class="col-md-6">
						<br>
							<label for="">Tel. Particular:</label>
							<input type="text" name="txtTelP" placeholder="Tel. Particular..." size="8" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="Asistentes..." autocomplete="on" class="form-control"/>
						</div>
						<div class="col-md-6">
						<br>
							<label for="">Tel. Celular:</label>
							<input type="text" name="txtTelCelu" placeholder="Tel. Celular..." size="10" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="Asistentes..." autocomplete="on" class="form-control"/>
						</div>
					</div>
				<br>
				<label for="">Tipo de Apoyo:</label>
				<input type="text" name="txtTipApoyo" placeholder="Tipo de Apoyo..." class="form-control" id="autoApoyo" autocomplete="on" required/>
				<br>
				<div class="row">
						<div class="col-md-4">
						<br>
							<label for="">Cantidad:</label>
							<input type="text" name="txtCantidad" placeholder="Catidad..." size="3" maxlength="3" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="Asistentes..." autocomplete="on" class="form-control" required/>
						</div>
						<div class="col-md-6">
						<br>
							<label for="">Tipo de Medida:</label>
							<input type="text" name="txtTipMed" placeholder="Unidades, Piezas..." id="autoUnidadMedida" autocomplete="on" class="form-control" required/>
						</div>
					</div>
				<br>
				<label for="">Observaciones:</label>
				<textarea name="txtObservaciones" cols="30" rows="10" placeholder="Observaciones..." class="form-control"></textarea>
				<br>
				<label for="">Atendió:</label>
				<input type="hidden" name="txtUsuario" placeholder="Atendió...." class="form-control" value="<?php echo $nombreCompleto; ?>" />
				<input type="text" placeholder="Atendió...." class="form-control" value="<?php echo $nombreCompleto; ?>" disabled/>
				<br>
				</div>

					<div class="form-group form-group-lg">

					    <input type="submit" value="Guardar" class="btn btn-lg btn-block btnVerde"/>
					</div>

					<div class="form-group form-group-lg">

					    <a href="menu.php" ><div class="btn btn-lg btnAzul"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Regresa</div>
					</a>

					    <input type="reset" value="Limpiar" class="btn btn-lg btnVerdeF"/>
					</div>
			</form>
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
$( "#autoApoyo" ).autocomplete({
  source: "apoyo.php"
});
$( "#autoUnidadMedida" ).autocomplete({
  source: "unidadMedida.php"
});
</script>

<!-- ######## Aqui comienza Autocompletado ############ -->



</body>
</html>