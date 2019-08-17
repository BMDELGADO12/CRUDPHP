<?php

require_once'00_conexion.php';

if (isset($_POST['registrar'])) {

	$IDempleado = $_POST['identificacion'];
	$Apellido = $_POST['apellido'];
	$Nombre = $_POST['nombre'];
	$Ciudad = $_POST['ciudad'];
	$Facultad = $_POST['facultad'];
	$Cargo = $_POST['cargo'];
	$Salario = $_POST['salario'];
	$Fecha_inicio = $_POST['Fecha_inicio'];
	$Fecha_nacimiento = $_POST['Fecha_nacimiento'];



	$query = "UPDATE empleado SET IDempleado='$IDempleado',Apellido='$Apellido',Nombre='$Nombre',Ciudad='$Ciudad',Facultad='$Facultad',Cargo='$Cargo', Salario='$Salario', Fe_inicio = '$Fecha_inicio', Fe_nacimiento = '$Fecha_nacimiento' WHERE IDempleado = $IDempleado";

	echo $query;


	$sql = mysqli_query($vrconexion, $query);


	if ($sql == false) {
		header("location: editar.php?error=Hubo un problema");
		
	}
	else{

		header("location:editar.php");
		
	}
 

	
}

 ?>