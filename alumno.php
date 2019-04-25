<?php
	class Alumno{
		private $id;
		private $nombre;
		private $apellido_paterno;
		private $apellido_materno;
		private $matricula;

		function __construct(){}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getApellido_paterno(){
			return $this->apellido_paterno;
		}

		public function setApellido_paterno($apellido_paterno){
			$this-> apellido_paterno = $apellido_paterno;
		}

		public function getApellido_materno(){
			return $this->apellido_materno;
		}

		public function setApellido_materno($apellido_materno){
			$this-> apellido_materno = $apellido_materno;
		}

		public function getMatricula(){
			return $this->matricula;
		}

		public function setMatricula($matricula){
			$this-> matricula = $matricula;
		}


		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}

?>