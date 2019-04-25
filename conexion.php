<?php
	/*class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:172.30.125.213=:3306;dbname=sampledb','user','12345',$pdo_options);
			return self::$conexion;
		}		
	}
	*/
	$enlace = mysqli_connect("salon:3306", "user", "12345", "sampledb");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}
/*
		 Username: user 
		 Password: 12345 
		 Database Name: sampledb 
		 Connection URL: mysql://salon:3306/
	*/

?>