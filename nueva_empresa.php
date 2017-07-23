<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Nueva Empresa</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.2.0.js"></script>
		<script src="bootstrap.js"></script>
	</head>
	<body>
		<br>
		<div class="container">
			<h3><b>Nueva Empresa</b></h3>
			<form class="form-horizontal">				
				<div class="form-group">
					<label for="txtNombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="txtNombre" name="txtNombre">
					</div>
					<label for="txtRut" class="col-sm-2 control-label">RUT</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="txtRut" name="txtRut">
					</div>
				</div>
				<div class="form-group">
					<label for="txtNombreRep" class="col-sm-2 control-label">Nombre Representante</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="txtNombreRep" name="txtNombreRep">
					</div>
					<label for="txtRutRep" class="col-sm-2 control-label">RUT Representante</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="txtRutRep" name="txtRutRep">
					</div>
				</div>
				<div class="form-group">
					<label for="txtGiro" class="col-sm-2 control-label">Giro</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="txtGiro" name="txtGiro">
					</div>
					<label for="cboRubro" class="col-sm-2 control-label">Rubro</label>
					<div class="col-sm-4">
						<select name="cboRubro" id="cboRubro" class="form-control">
							<option value="1">RUBRO #1</option>
						</select>
					</div>					
				</div>
				<div class="form-group">
					<label for="txtDireccion" class="col-sm-2 control-label">Dirección</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="txtDireccion" name="txtDireccion">
					</div>
					<label for="txtTelefono" class="col-sm-2 control-label">Teléfono</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="txtTelefono" name="txtTelefono">
					</div>
				</div>
				<div class="form-group">
					<label for="txtEmail" class="col-sm-2 control-label">Correo electronico</label>
					<div class="col-sm-4">
						<input type="mail" class="form-control" id="txtEmail" name="txtEmail">
					</div>					
					<div class="col-sm-offset-2 col-sm-2">
						<button type="submit" class="btn btn-block btn-success">Guardar</button>
					</div>
				</div>
				<div class="form-group">
				</div>
			</form>
		</div>
	</body>
</html>