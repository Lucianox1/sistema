<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Busqueda personal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.2.0.js"></script>
		<script src="bootstrap.js"></script>
	</head>
	<body>
		<br>
		<div class="container">
			<h3><b>Busqueda de personal</b></h3>
			<form class="form-horizontal">
				<div class="form-group">
					<label for="cboComuna" class="col-sm-1 control-label">Comuna</label>
					<div class="col-sm-3">	
						<select name="cboComuna" class="form-control" id="cboComuna">
							<option value="1">VI Región</option>
						</select>						
					</div>
					<label for="cboInstalacion" class="col-sm-1 control-label">Instalación</label>
					<div class="col-sm-3">	
						<select name="cboInstalacion" class="form-control" id="cboInstalacion">
							<option value="1">Instalación A</option>
						</select>						
					</div>
					<label for="cboContrato" class="col-sm-1 control-label">Contrato</label>
					<div class="col-sm-3">	
						<select name="cboContrato" class="form-control" id="cboContrato">
							<option value="1">INDEFINIDO</option>
						</select>						
					</div>
				</div>

				<div class="form-group">
					<label for="txtRut" class="col-sm-1 control-label">RUT</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="txtRut" name="txtRut">
					</div>
					<label for="txtNombre" class="col-sm-1 control-label">Nombre</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="txtNombre" name="txtNombre">
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<button type="submit" class="btn btn-block btn-success" name="btnBuscar">Buscar</button>
					</div>
				</div>
			
				<br>
				<table class="table table-bordered table-hover">
					<thead class="bg-primary">
						<th>Nombre</th>
						<th>RUT</th>
						<th>Teléfono</th>
						<th>Estado</th>
					</thead>
					<tbody>
					</tbody>
				</table>
			</form>
		</div>
	</body>
</html>