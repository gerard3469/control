<?php
//incluye la clase Alumno y CrudAlumno
require_once('crud_alumno.php');
require_once('alumno.php');

$crud= new Crudalumno();
$alumno= new alumno();

	// si el elemento insertar no viene nulo llama al crud e inserta un alumno
	if (isset($_POST['insertar'])) {
		$alumno->setNombre($_POST['nombre']);
		$alumno->setApellido_paterno($_POST['app']);
		$alumno->setApellido_materno($_POST['apm']);
		$alumno->setMatricula($_POST['matricula']);

		//llama a la función insertar definida en el crud
		$crud->insertar($alumno);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el alumno
	}elseif(isset($_POST['actualizar'])){
		$alumno->setId($_POST['id']);
		$alumno->setNombre($_POST['nombre']);
		$alumno->setApellido_paterno($_POST['app']);
		$alumno->setApellido_materno($_POST['apm']);
		$alumno->setMatricula($_POST['matricula']);
		$crud->actualizar($alumno);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un alumno
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>