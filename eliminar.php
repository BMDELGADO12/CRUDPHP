<?php

	require_once '00_conexion.php';

	if (isset($_GET['enviando'])) {
		
		$dato_buscado = $_GET['id'];
		!is_numeric($dato_buscado) ? die('Error al elminar') : '';
	} 

	if (isset($_GET['identificacion'])) {
	$IDempleado = $_GET['identificacion'];
	

	$query = "DELETE FROM empleado WHERE IDempleado = $IDempleado";

	echo $query;

	$vrresultado = mysqli_query($vrconexion, $query);

	if ($vrresultado == false) {
		header("location: index.php?error=Hubo un problema");
	}
	else{
		header("location:index.php");

	}
	



}


 ?>

 <!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>busqueda de datos</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container-fluid">
		<div class="jumbotron text-center bg-dark text-white" style="margin-bottom:-60px">
  		<h1>Eliminar Datos</h1>
  		</div>

  		 <div class="row">
	      <div class="col-md-5 offset-md-7">
		  <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="nav navbar-nav pull-md-right">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Incio</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="registro.php">Registro de Datos</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="consulta.php">Listar Datos</a>
		      </li> 
		      <li class="nav-item">
		        <a class="nav-link" href="busquedaActualizar.php">Actualizar Datos</a>
		      </li>    
		    </ul>
  </div>  
</nav>
</div>
</div>

		<div class="row" style="margin-top:20px">
        <div class="col-md-2">
          <a href="busquedaEliminar.php" class="btn btn-dark btn-md" role="button" >Volver</a>
        </div>
        </div>		

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
					<th>Eliminar</th>
				</tr>

				<?php

			$query = "SELECT * FROM empleado WHERE IDempleado = $dato_buscado";

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
					$table.= "<td><a class='btn btn-dark' onclick='myFunction()' href='eliminar.php?identificacion=".$fila['IDempleado']."'>Eliminar</a></td>";
					$table.="</tr>";

					

				}

				echo $table;


				 ?> 

				 <script>
					function myFunction() {
					  confirm("Desea Eliminar!");
					}
					</script>
				
			</table>
			</div>
		</div>
	</div>

	
</body>
</html>
