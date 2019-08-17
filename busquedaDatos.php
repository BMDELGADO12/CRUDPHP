<?php 

/*require_once'00_conexion.php';

if (isset($_GET['enviando'])) {
	
	$dato_buscado = $_GET['buscar'];

	$query = "SELECT * FROM empleado WHERE Apellido like'$dato_buscado%'";

	$vrresultado = mysqli_query($vrconexion, $query);

	if ($vrresultado == false) {
		header("location: busquedaDatos.php?error=Hubo un problema");
	}
	else{
		header("location:busquedaDatos.php");

	}


}  */




	require_once '00_conexion.php';

	if (isset($_POST['enviando'])) {
		
		$dato_buscado = $_POST['buscar'];
	} 

/*function realizar_busqueda($dato_buscado){
	require_once '00_conexion.php';

	$vrconsulta = "SELECT * FROM empleado WHERE Apellido like'%$dato_buscado%'";

	$vrresultado = mysqli_query($vrconexion, $vrconsulta);

	while ($vrfila = mysqli_fetch_array($vrresultado)){ 
		echo "<table width ='50%' class='table' align ='center' border ='1'><tr><td>"; 
		echo $vrfila ['IDempleado'] . "</td><td>"; 
		echo $vrfila ['Apellido'] . "</td><td>"; 
		echo $vrfila ['Nombre'] . "</td><td></tr></table>"; 
		echo "<br>"; 
	} 
		mysqli_close($vrconexion); 


} 

/*if(isset($_POST["enviando"])){ 
	$mibusqueda = $_POST["buscar"]; 
	echo "<br>"; realizar_busqueda($mibusqueda); 



} */


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>busqueda de datos</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>

	<div class="jumbotron text-center bg-primary">
  		<h1>Busqueda de Datos</h1>
  		</div>

	<div class="container">
		<div class="col md-6 offset-md-5">
		</div>
		<div class="row">
			<div class="col-md-10 offset-md-1">
			<table class="table">

				<tr>
					<th>Identificacion</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Cargo</th>
					<th>Facultad</th>
					<th>Ciudad</th>
					<th>Salario</th>
				</tr>

				<?php

			$query = "SELECT * FROM empleado WHERE Nombre like'$dato_buscado%'";

			$vrresultado = mysqli_query($vrconexion, $query);


				$table ='';
				while ($fila = mysqli_fetch_array($vrresultado)) {
					
					$table.="<tr>";
					$table.="<td> $fila[IDempleado]</td>";
					$table.="<td> $fila[Nombre]</td>";
					$table.="<td> $fila[Apellido]</td>";
					$table.="<td> $fila[Cargo]</td>";
					$table.="<td> $fila[Facultad]</td>";
					$table.="<td> $fila[Ciudad]</td>";
					$table.="<td> $fila[Salario]</td>";
					//$table.= "<td><a href='editar.php?id=".$fila['IDempleado']."'>Editar</a></td>";
					//$table.= "<td><a href='consulta.php?id=".$fila['IDempleado']."'>Eliminar</a></td>";
					$table.="</tr>";


				}

				echo $table;


				 ?> 
				
			</table>
			</div>
		</div>
	</div>

	
</body>
</html>
