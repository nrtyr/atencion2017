<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Anteción Ciudadana</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 panel panel-success">
			<h1>Atención Ciudadana</h1>
			<br>
			<form action="insertar.php" method="post">
			 <div class="form-group">
				<div class="row">
  					<div class="col-md-4">
  					<br>
						<label for="">Folio:</label>
						<input type="text" name="txtFolio" placeholder="Folio" class="form-control" />
					</div>
						
					<div class="col-md-4">
					<br>
						<label for="">Fecha:</label>
						<input type="text" name="txtFecha" placeholder="Fecha" class="form-control"/>
					</div>
						
					<div class="col-md-4">
					<br>
						<label for="">Hora:</label>
						<input type="text" name="txtHora" placeholder="Hora" class="form-control"/>
					</div>
						
					<div class="col-md-6">
					<br>
						<label for="">Sección:</label>
						<input type="text" name="txtSeccion" placeholder="Sección" class="form-control"/>
					</div>
						
					<div class="col-md-6">
					<br>
						<label for="">Onomástico:</label>
						<input type="date" name="txtOnomastic" placeholder="Onomástico" class="form-control"/>
					</div>
						
				</div>
				<br>
				<label for="">Nombre:</label>
				<input type="text" name="txtNombre" placeholder="Nombre..." class="form-control"/>
				<br>
				<label for="">Domicilio:</label>
				<input type="text" name="txtDom" placeholder="Domicilio..." class="form-control"/>
				
					<div class="row">
						<div class="col-md-6">
						<br>
							<label for="">Tel. Particular:</label>
							<input type="tel" name="txtTelP" placeholder="Tel. Particular..." class="form-control"/>
						</div>
						<div class="col-md-6">
						<br>
							<label for="">Tel. Celular:</label>
							<input type="tel" name="txtTelCelu" placeholder="Tel. Celular..." class="form-control"/>
						</div>
					</div>
				<br>
				<label for="">Correo Electronico:</label>
				<input type="text" name="txtCorreo" placeholder="Correo Electronico..." class="form-control"/>
				<br>
				<label for="">Asunto:</label>
				<textarea name="txtAsunto" cols="30" rows="10" placeholder="Asunto..." class="form-control"></textarea>
				<br>
				<label for="">Area o Dependencia a la que se Canalizo:</label>
				<input type="text" name="txtArea" placeholder="Area o Dependencia a la que se Canalizo" class="form-control"/>
				<br>
				<label for="">Atendió:</label>
				<input type="text" name="txtUsuario" placeholder="Atendió...." class="form-control"/>
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-lg btn-block"/>
				<br>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>