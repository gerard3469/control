<?php
echo "conexion";

$enlace = mysqli_connect("mysql://mysql:3306/", "userMRA", "RIw4DP6FwQju05rD", "salon");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
} else {

	echo "conexion exitosa";
}
		/*
		 Username: userMRA 
		 Password: RIw4DP6FwQju05rD 
		 Database Name: salon 
		 Connection URL: mysql://mysql:3306/
		 user root: 7FX3BtPqUOttX4iF

		 */

?>
