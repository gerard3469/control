<?php
echo "Hola";
	$enlace = mysqli_connect("salon:3306", "user", "12uhkj345", "sampledb");

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
