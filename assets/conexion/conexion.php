<?php 

$servidor ="mysql:dbname=empresa;host=127.0.0.1";

$usuario = "root";

$password="";


try {

	$conexion = new PDO($servidor, $usuario, $password);
	
} catch (PDOException $e) {

	echo "Conexion mala :( ".$e->getMessage();
	
}

 ?>