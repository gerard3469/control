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
</head>
<body>
	<form action='administrar_alumno.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $alumno->getId()?>'>
			<td>Nombre:</td>
			<td> <input type='text' name='nombre' value='<?php echo $alumno->getNombre()?>'></td>
		</tr>
		<tr>
			<td>Apellido Paterno:</td>
			<td><input type='text' name='app' value='<?php echo $alumno->getApellido_paterno()?>' ></td>
		</tr>
		<tr>
			<td>Apellido Materno:</td>
			<td><input type='text' name='apm' value='<?php echo $alumno->getApellido_materno() ?>'></td>
		</tr>
		<tr>
			<td>Matricula:</td>
			<td><input type='number' name='matricula' value='<?php echo $alumno->getMatricula() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>