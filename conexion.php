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

?>