<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Nuevo personal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.2.0.js"></script>
		<script src="bootstrap.js"></script>
	</head>
	<body>
		<br>
		<div class="container">
			<h3><b>Crear nuevo personal</b></h3>
			<form class="form-horizontal">
				<div class="form-group">
					<label for="txtRut" class="col-sm-2 control-label">RUT</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="txtRut" name="txtRut">
					</div>
				</div>
				<div class="form-group">
					<label for="txtNombre" class="col-sm-2 control-label">Nombres</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="txtNombre" name="txtNombre">
					</div>
					<label for="txtApe" class="col-sm-2 control-label">Apellidos</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="txtApe" name="txtApe">
					</div>
				</div>
				<div class="form-group">
					<label for="txtNacimiento" class="col-sm-2 control-label">Nacimiento</label>
					<div class="col-sm-4">
						<input type="date" class="form-control" id="txtNacimiento" name="txtNacimiento">
					</div>
					<label for="txtTelefono" class="col-sm-2 control-label">Teléfono</label>
					<div class="col-sm-4">
						<input type="tet" class="form-control" id="txtTelefono" name="txtTelefono">
					</div>
				</div>
				<div class="form-group">
					<label for="txtDireccion" class="col-sm-2 control-label">Dirección</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="txtDireccion" name="txtDireccion">
					</div>
					<label for="cboComuna" class="col-sm-2 control-label">Comuna</label>
					<div class="col-sm-4">
						<select name="cboComuna" class="form-control" id="cboComuna">
							<option value="1">VI Región</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="txtEcivil" class="col-sm-2 control-label">Estado Civil</label>
					<div class="col-sm-4">
						<select name="txtEcivil" class="form-control" id="txtEcivil">
							<option value="1">SOLTERO</option>
						</select>
					</div>
					<label for="cboSexo" class="col-sm-2 control-label">Sexo</label>
					<div class="col-sm-4">
						<select name="cboSexo" class="form-control" id="cboSexo">
							<option value="1">MASCULINO</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="txtIngreso" class="col-sm-2 control-label">Fecha Ingreso</label>
					<div class="col-sm-4">
						<input type="date" class="form-control" id="txtIngreso" name="txtIngreso">
					</div>					
				</div>
				<div class="form-group">
					<label for="cboLabor" class="col-sm-2 control-label">Labor</label>
					<div class="col-sm-4">
						<select name="cboLabor" class="form-control" id="cboLabor">
							<option value="1">-Guardia seguridad-</option>
						</select>
					</div>
					<label for="cboInstalacion" class="col-sm-2 control-label">Instalación</label>
					<div class="col-sm-4">
						<select name="cboInstalacion" class="form-control" id="cboInstalacion">
							<option value="1">-Instalación A-</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="cboZapatos" class="col-sm-2 control-label">N° Calzado</label>
					<div class="col-sm-4">
						<select name="cboZapatos" class="form-control" id="cboZapatos">
							<option value="1">-42-</option>
						</select>
					</div>
					<label for="cboPantalon" class="col-sm-2 control-label">Talla pantalon</label>
					<div class="col-sm-4">
						<select name="cboPantalon" class="form-control" id="cboPantalon">
							<option value="1">-46-</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="cboPolera" class="col-sm-2 control-label">Talla Polera</label>
					<div class="col-sm-4">
						<select name="cboPolera" class="form-control" id="cboPolera">
							<option value="1">-M-</option>
						</select>
					</div>
					<label for="cboCasaca" class="col-sm-2 control-label">Talla Casaca</label>
					<div class="col-sm-4">
						<select name="cboCasaca" class="form-control" id="cboCasaca">
							<option value="1">-L-</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-10 col-sm-2">
						<button type="submit" class="btn btn-block btn-success">Guardar</button>
					</div>
				</div>

				<table class="table table-bordered table-hover">
					<thead class="bg-primary">
						<th>Generar Documentos</th>
						<th></th>
					</thead>
					<tbody>
						<tr>
							<td>CONTRATO PLAZO FIJO</td>
							<td><button class="btn btn-xs btn-warning">Generar</button></td>
						</tr>
						<tr>
							<td>ANEXO A CONTRATO INDEFINIDO</td>
							<td><button class="btn btn-xs btn-warning">Generar</button></td>
						</tr>
						<tr>
							<td>DERECHO A SABER</td>
							<td><button class="btn btn-xs btn-warning">Generar</button></td>
						</tr>
						<tr>
							<td>REGLAMENTO INTERNO</td>
							<td><button class="btn btn-xs btn-warning">Generar</button></td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</body>
</html>