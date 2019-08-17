<?php
require_once '00_conexion.php';

if (isset($_GET['id'])) {

	$IDempleado = $_GET['id'];

//	echo $IDempleado;
	

$query ="SELECT * FROM empleado WHERE IDempleado = $IDempleado";

$vrresultado= mysqli_query($vrconexion, $query);
$datos = mysqli_fetch_array($vrresultado);

}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar Datos</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

  		<div class="container-fluid">
        <div class="jumbotron text-center bg-dark text-white" style="margin-bottom: -60px">
      <h1>Actualizar Datos</h1>
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
            <a class="nav-link" href="consulta.php">Listar Datos</a>
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
          <a href="busquedaActualizar.php" class="btn btn-dark btn-md" role="button">Volver</a>
        </div>
        </div>

  			<div class="row">
  				<div class="col-md-6 offset-md-4">

  					<form action="editar.php?id=<?php echo $IDempleado?>" method="POST">
  						<div class="form-group row">
  							<div class="col-md-3">
  								<input type="hidden" class="form-control" name="identificacion" value="<?php echo $IDempleado;?>">  
  								
  								</div>
  							</div>
  							<div class="form-group row">
  								<label for="" class="col-md-3 col-form-label">Nombre:</label>		
  								<div class="col-md-5">
  									<input type="text" class="form-control" name="nombre" value="<?php echo $datos['Nombre'] ?>">	
  								</div>
  							</div>

  							<div class="form-group row">
  								<label for="" class="col-md-3 col-form-label">Apellido:</label>
  								<div class="col-md-5">
  									<input type="text" class="form-control" name="apellido" value="<?php echo $datos['Apellido'] ?>">	
  								</div>
                </div>

  								<div class="form-group row">
  								<label for="" class="col-md-3 col-form-label">Cargo:</label>
  								
  							
  								<div class="col-md-5">
  									<input type="text" class="form-control" name="cargo" value="<?php echo $datos['Cargo']?>">	
  								</div>
                </div>

  								<div class="form-group row">
  								<label for="" class="col-md-3 col-form-label">Facultad:</label>
  								<div class="col-md-5">
  									<input type="text" class="form-control" name="facultad" value="<?php echo $datos['Facultad']?>">	
  								</div>
                </div>

  								<div class="form-group row">	
  								<label for="" class="col-md-3 col-form-label"> Ciudad:</label>
  								<div class="col-md-5">
  									<input type="text" class="form-control" name="ciudad" value="<?php echo $datos['Ciudad']?>">	
  								</div>
                </div>

  								<div class="form-group row">
  								<label for="" class="col-md-3 col-form-label">Salario:</label>
  								<div class="col-md-5">
  									<input type="text" class="form-control" name="salario" value="<?php echo $datos['Salario']?>">	
  								</div>
                </div>

  								<div class="form-group row">
  								<label for="" class="col-md-3 col-form-label">Fecha Inicio:</label>
  								<div class="col-md-5">
                    <input type="text" class="form-control" name="Fecha_inicio" value="<?php echo $datos['Fe_inicio']?>">  
  									</div>
                  </div>

  								<div class="form-group row">
  								<label for="" class="col-md-3 col-form-label">Fecha Nacimiento:</label>
  								<div class="col-md-5">
  									<input type="text" class="form-control" name="Fecha_nacimiento" value="<?php echo $datos['Fe_nacimiento']?>">  
  								</div>
                </div>
  								<div class="col-md-3 offset-md-4">
  									<button type="submit" name="registrar" class="btn btn-dark data-toggle="modal" data-target="#myModal"">Guardar</button>
  								</div>
  							</form>
  						</div>
  			</div>
  		</div>

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

  $sql = mysqli_query($vrconexion, $query);


  if ($sql == false) {
    // header("location: editar.php?error=Hubo un problema");
  ?>
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Error en Actualizar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
                Los Datos no fueron Actualizados..
              </div>
              
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
              </div>
              
            </div>
          </div>
        </div>
        <script>$("#myModal").modal("show");</script>
<?php   
  }
  else{

?>
      <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Actualizacion Exitosa</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
                Los Datos Fueron Actualizados..
              </div>
              
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
              </div>
              
            </div>
          </div>
        </div>
        <script>$("#myModal").modal("show");</script>
<?php
    
  }
 

  
}

 ?>
	
</body>
</html>