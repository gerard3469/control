<?php
//incluye la clase alumno y Crudalumno
	require_once('crud_alumno.php');
	require_once('alumno.php');
	$crud= new Crudalumno();
	$alumno=new alumno();
	//busca el alumno utilizando el id, que es enviado por GET desde la vista mostrar.php
	$alumno=$crud->obteneralumno($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Alumno</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

	<div class="container"><br>
		<div class="row">
			<div class="col-4 bg-dark text-white">
				<h1>Actualizar datos</h1>
				<form action='administrar_alumno.php' method='post'>
					<table class="text-white">
						<tr>
							<input type='hidden' name='id'  value='<?php echo $alumno->getId()?>'>
							<td><h5>Nombre:</h5></td>
							<td> <input type='text' name='nombre' class="form-control" value='<?php echo $alumno->getNombre()?>'></td>
						</tr>
						<tr>
							<td><h5>Apellido Paterno:</h5></td>
							<td><input type='text' name='app' class="form-control" value='<?php echo $alumno->getApellido_paterno()?>' ></td>
						</tr>
						<tr>
							<td><h5>Apellido Materno:</h5></td>
							<td><input type='text' name='apm' class="form-control" value='<?php echo $alumno->getApellido_materno() ?>'></td>
						</tr>
						<tr>
							<td><h5>Matricula:</h5></td>
							<td><input type='number' name='matricula' class="form-control" value='<?php echo $alumno->getMatricula() ?>'></td>
						</tr>
						<input type='hidden' name='actualizar' value='actualizar'>
					</table> <br>
					<input type='submit' class="btn btn-success btn-block" value='Guardar'>
					<a href="index.php" class="btn btn-secondary btn-block"> <i class="fas fa-arrow-left"></i>Volver</a>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>