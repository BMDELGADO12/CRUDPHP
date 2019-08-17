<?php
require_once "00_conexion.php";

$sql = "SELECT IDempleado, Nombre, Apellido,Facultad, Ciudad, Cargo, Salario FROM empleado";

$vresultado = mysqli_query($vrconexion, $sql);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consulta Compania S.A</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>


  		<div class="container-fluid">

		<div class="jumbotron text-center bg-dark text-white" style="margin-bottom: -60px">
  		<h1>Consulta de Empleados</h1>
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
		        <a class="nav-link" href="index.php">Inicio</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="registro.php">Registro de Datos</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="busquedaActualizar.php">ActuaLizar Datos</a>
		      </li> 
		      <li class="nav-item">
		        <a class="nav-link" href="busquedaEliminar.php">Eliminar Datos</a>
		      </li>    
		    </ul>
  </div>  
</nav>
</div>
</div>


  		<div class="row">
        <div class="col-md-2" style="margin-top: 20px">
          <a href="index.php" class="btn btn-dark btn-md" role="button">Volver</a>
        </div>
        </div>

  			<div class="row">
  			</div>
  				<div class="col-md-10 offset-md-1">
  					<table class="table table-hover">
  						<tr>
  							<th>Identificacion</th>
  							<th>Nombre</th>
  							<th>Apellido</th>
  							<th>Ciudad</th>
  							<th>Cargo</th>
  							<th>Facultad</th>
  							<th>Salario</th>
  						</tr>
						<?php
						$table = '';
						while ($fila =mysqli_fetch_array($vresultado)) {
							$table.= "<tr>";
							$table.= "<td> $fila[IDempleado] </td>";
							$table.= "<td> $fila[Nombre] </td>";
							$table.= "<td> $fila[Apellido] </td>"; 
							$table.= "<td> $fila[Ciudad] </td>"; 
							$table.= "<td> $fila[Cargo] </td>";
							$table.= "<td> $fila[Facultad] </td>"; 
							$table.= "<td> $fila[Salario] </td>"; 
							//$table.= "<td><a href='editar.php?id=".$fila['IDempleado']."'>Editar</a></td>";
							//$table.= "<td><a href='consulta.php?id=".$fila['IDempleado']."'>Eliminar</a></td>";
	
							$table.= "</tr>";							
						}

						echo $table;
						 ?>

  					</table>
  				</div>
  			</div>
  		</div>
	
</body>
</html>