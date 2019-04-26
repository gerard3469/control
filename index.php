<?php
$servername = "mysql:3306";
$database = "salon";
$username = "userMRA";
$password = "RIw4DP6FwQju05rD";

class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:host=mysql:3306;dbname=salon',$username,$password,$pdo_options);
			return self::$conexion;
		}		
	}
		/*
		 Username: userMRA 
		 Password: RIw4DP6FwQju05rD 
		 Database Name: salon 
		 Connection URL: mysql://mysql:3306/
		 user root: 7FX3BtPqUOttX4iF

		 */

	$db=Db::conectar();
			$sql=<<<EOD
 
				USE salon;
				CREATE TABLE `alumnos` (
  					`id` int(11) NOT NULL,
  					`nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  					`apellido_paterno` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL ,
  					`apellido_materno` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL ,
  					`matricula` varchar(8) COLLATE utf8mb4_spanish2_ci NOT NULL
  
					) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
 
				ALTER TABLE `alumnos`
  				ADD PRIMARY KEY (`id`);
  
				ALTER TABLE `alumnos`
					ADD UNIQUE (`matricula`) ;
    
				ALTER TABLE `alumnos`
  				MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
			EOD;
		if($db->query($sql)){

				echo "base de datos creada extosamente"
		} else {
				echo "no se pudo crear" 
		}

?>