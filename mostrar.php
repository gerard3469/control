<?php
//incluye la clase alumno y Crudalumno
require_once('crud_alumno.php');
require_once('alumno.php');
$crud=new Crudalumno();
$alumno= new alumno();
//obtiene todos los alumnos con el método mostrar de la clase crud
//$listaalumnos=$crud->mostrar();
$query=$crud->generar();
?>

<html>
<head>
	<title>Mostrar alumnos</title>
</head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<body>
	<div class="container">
		<br>
		<h1>Lista de alumnos</h1>
		<table class="table">
  		<thead class="thead-dark">
    		<tr>
      			<th scope="col">Nombre</th>
      			<th scope="col">Apellido paterno</th>
      			<th scope="col">Apellido materno</th>
      			<th scope="col">Matricula</th>
      			<th scope="col"></th>
      			<th scope="col"></th>
    		</tr>
  		</thead>
  		<tbody>
    		<?php foreach ($listaalumnos as $alumno) {?>
			<tr>
				<td><?php echo $alumno->getNombre() ?></td>
				<td><?php echo $alumno->getApellido_paterno() ?></td>
				<td><?php echo $alumno->getApellido_materno() ?></td>
				<td><?php echo $alumno->getMatricula()?> </td>
				<td><a href="actualizar.php?id=<?php echo $alumno->getId()?>&accion=a"><i class="fas fa-user-edit"></i></a> </td>
				<td><a href="administrar_alumno.php?id=<?php echo $alumno->getId()?>&accion=e" id="eliminar"><i class="fas fa-trash-alt"></i></a>   </td>
			</tr>
			<?php }?>
  		</tbody>
		</table>
		<a href="index.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Volver</a>
	</div>
	
</html>