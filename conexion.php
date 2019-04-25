<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:host=salon:3306;dbname=sampledb','user','12345',$pdo_options);
			return self::$conexion;
		}		
	}
	
/*
		 Username: user 
		 Password: 12345 
		 Database Name: sampledb 
		 Connection URL: mysql://salon:3306/
	*/

?>