<?php
require_once('conexion.php');
	echo "string";
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
		if($db->query($sql)===true){

				echo "base de datos creada extosamente";
		} else {
				echo "no se pudo crear" ;
		}

?>