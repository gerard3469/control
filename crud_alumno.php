<?php
// incluye la clase Db
require_once('conexion.php');

	class Crudalumno{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo alumno
		public function insertar($alumno){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO alumnos values(NULL,:nombre,:app,:apm,:matricula)');
			$insert->bindValue('nombre',$alumno->getNombre());
			$insert->bindValue('app',$alumno->getApellido_paterno());
			$insert->bindValue('apm',$alumno->getApellido_materno());
			$insert->bindValue('matricula',$alumno->getMatricula());
			$insert->execute();

		}

		// método para mostrar todos los alumnos
		public function mostrar(){
			$db=Db::conectar();
			$listaalumnos=[];
			$select=$db->query('SELECT * FROM alumnos');

			foreach($select->fetchAll() as $alumno){
				$myalumno= new alumno();
				$myalumno->setId($alumno['id']);
				$myalumno->setNombre($alumno['nombre']);
				$myalumno->setApellido_paterno($alumno['apellido_paterno']);
				$myalumno->setApellido_materno($alumno['apellido_materno']);
				$myalumno->setMatricula($alumno['matricula']);
				$listaalumnos[]=$myalumno;
			}
			return $listaalumnos;
		}

		// método para eliminar un alumno, recibe como parámetro el id del alumno
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM alumnos WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un alumno, recibe como parámetro el id del alumno
		public function obteneralumno($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM alumnos WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$alumno=$select->fetch();
			$myalumno= new alumno();
			$myalumno->setId($alumno['id']);
			$myalumno->setNombre($alumno['nombre']);
			$myalumno->setApellido_paterno($alumno['apellido_paterno']);
			$myalumno->setApellido_materno($alumno['apellido_materno']);
			$myalumno->setMatricula($alumno['matricula']);
			return $myalumno;
		}

		// método para actualizar un alumno, recibe como parámetro el alumno
		public function actualizar($alumno){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE alumnos SET nombre=:nombre, apellido_paterno=:app,apellido_materno=:apm, matricula=:matricula WHERE ID=:id');
			$actualizar->bindValue('id',$alumno->getId());
			$actualizar->bindValue('nombre',$alumno->getNombre());
			$actualizar->bindValue('app',$alumno->getApellido_paterno());
			$actualizar->bindValue('apm',$alumno->getApellido_materno());
			$actualizar->bindValue('matricula',$alumno->getMatricula());
			$actualizar->execute();
		}
	}
?>