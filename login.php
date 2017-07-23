<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ingreso</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.2.0.js"></script>
		<script src="bootstrap.js"></script>
	</head>
	<body>
		<br>
		<div class="container">
			<div class="col-sm-4 col-sm-offset-4">
				<h3><b>Ingreso</b></h3>				
			</div>
			<form class="form-horizontal">
				<div class="form-group">
					<div class="col-sm-4 col-sm-offset-4">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</div>
							<input type="text" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="Usuario">							
						</div>
					</div>
				</div>
				<div class="form-group">					
					<div class="col-sm-4 col-sm-offset-4">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="glyphicon glyphicon-lock"></i>
							</div>
							<input type="password" class="form-control" id="txtPass" name="txtPass" placeholder="Contraseña">							
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-4 col-sm-offset-4">
						<button type="submit" class="btn btn-block btn-primary">Ingresar</button>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-4 col-sm-offset-4">
						<a href="#">Olvidé mi contraseña</a>
					</div>					
				</div>

			</form>
		</div>
	</body>
</html>