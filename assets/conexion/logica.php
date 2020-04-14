<?php

/*Variables*/

$textID = (isset($_POST['textID']))?$_POST['textID']:"";

$textNombre = (isset($_POST['textNombre']))?$_POST['textNombre']:"";

$textApellidoM = (isset($_POST['textApellidoM']))?$_POST['textApellidoM']:"";

$textApellidoP = (isset($_POST['textApellidoP']))?$_POST['textApellidoP']:"";

$textcedula = (isset($_POST['textcedula']))?$_POST['textcedula']:"";

$textCorreo = (isset($_POST['textcorreo']))?$_POST['textcorreo']:"";

$textContrasena = (isset($_POST['textcontrasena']))?$_POST['textcontrasena']:"";

$accion = (isset($_POST['accion']))?$_POST['accion']:"";


/*Conexion*/

include("conexion.php");

/*Boton Agregar*/

switch ($accion) {

	case 'btnAgregar':
	$sentencia = $conexion->prepare("INSERT INTO 
		
		usuario(Nombre,ApellidoP,ApellidoM,correo,cedula,contrasena) 
		
		VALUES (:Nombre,:ApellidoP,:ApellidoM,:correo,:cedula,:contrasena)");

	$sentencia->bindParam(':Nombre', $textNombre);
	
	$sentencia->bindParam(':ApellidoP', $textApellidoP);
	
	$sentencia->bindParam(':ApellidoM', $textApellidoM);
	
	$sentencia->bindParam(':correo', $textCorreo);

	$sentencia->bindParam(':cedula', $textcedula);
	
	$sentencia->bindParam(':contrasena', $textContrasena);
	

	$sentencia->execute();

		
/*Boton Modificar*/
		
		break;

		case 'btnModificar':

	$sentencia = $conexion->prepare("UPDATE usuario SET
		Nombre=:Nombre,
		
		ApellidoP=:ApellidoP,
		
		ApellidoM=:ApellidoM,

		cedula=:cedula,

		contrasena=:contrasena,

		
		Correo=:correo WHERE id=:id");


	$sentencia->bindParam(':Nombre', $textNombre);
	
	$sentencia->bindParam(':ApellidoP', $textApellidoP);
	
	$sentencia->bindParam(':ApellidoM', $textApellidoM);
	
	$sentencia->bindParam(':correo', $textCorreo);

	$sentencia->bindParam(':cedula', $textcedula);
	
	$sentencia->bindParam(':contrasena', $textContrasena);
	
	$sentencia->bindParam(':id', $textID);
	
	$sentencia->execute();



	header('Location: index.php');


/*Boton Eliminar*/
		
		
		break;
		
		case 'btnEliminar':

	$sentencia = $conexion->prepare(" DELETE FROM usuario WHERE
		id=:id");
	
	$sentencia->bindParam(':id', $textID);
	
	$sentencia->execute();

	header('Location: index.php');

		
}

	$sentencia = $conexion->prepare("SELECT * FROM `usuario` WHERE 1");
	
	$sentencia->execute();
	
	$listaEmpleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);


 ?>