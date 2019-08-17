<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro de Empleados</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

	

  		<div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="jumbotron text-center bg-dark text-white" style="margin-bottom: -60px">
          <h1>Registro de Empleados</h1>
        </div>
        </div>
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
            <a class="nav-link" href="consulta.php">Listar Datos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="busquedaActualizar.php">Actualizar Datos</a>
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
          <div class="col-md-6 offset-md-4">
            <form action="registro.php"  method="POST" >
              <div class="form-group row">
                <label for="" class="col-md-3 col-form-label">Identificacion:</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" name="identificacion" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-md-3 col-form-label">Nombre:</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" name="nombre" required="required">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-md-3 col-form-label">Apellido:</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" name="apellido" required="required">
                </div>
              </div>


              <div class="form-group row">
                <label for="" class="col-md-3 col-form-label">Ciudad:</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" name="ciudad" required="required">
                </div>
              </div>


              <div class="form-group row ">
                <label for="" class="col-md-3 col-form-label">Cargo:</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" name="cargo" required="required">
                </div>
              </div>



              <div class="form-group row">
                <label for="" class="col-md-3 col-form-label">Facultad:</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" name="facultad" required="required">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-md-3 col-form-label">Salario:</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" name="salario" required="required">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-md-3 col-form-label">Fecha Inicio:</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" name="fechaInicio" required="required">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-md-3 col-form-label">Fecha Nacimiento:</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" name="fechaNacimiento" required="required">
                </div>
              </div>
               <div class="col-md-10 offset-md-3">
                    <button type="submit" class="btn btn-dark" name="registrar">Guardar</button>
                     <button type="reset" value="borrar" class="btn btn-dark">Borrar</button>
                    </div> 

            </form>
          </div>
        </div>					
  					
  				</div>

<?php
      require_once "00_conexion.php";
 if (isset($_POST['registrar'])) {       
      $IDempleado = $_POST['identificacion'];
      $Apellido = $_POST['apellido'];
      $Nombre = $_POST['nombre'];
      $Ciudad = $_POST['ciudad'];
      $Facultad = $_POST['facultad'];
      $Cargo = $_POST['cargo'];
      $Salario = $_POST['salario'];
      $Fecha_inicio = $_POST['fechaInicio'];
      $Fecha_nacimiento = $_POST['fechaNacimiento'];

if (!empty($IDempleado) and !empty($Apellido) and !empty($Nombre) and !empty($Ciudad) and !empty($Facultad) and !empty($Cargo) and !empty($Salario) and !empty($Fecha_inicio) and !empty($Fecha_nacimiento)) {



        $vrconsulta = "INSERT INTO empleado(IDempleado, Apellido, Nombre, Ciudad, Facultad, Cargo, Salario,Fe_inicio, Fe_nacimiento) VALUES ('$IDempleado', '$Apellido', '$Nombre', '$Ciudad', '$Facultad', '$Cargo', '$Salario','$Fecha_inicio', $Fecha_nacimiento)";

        //echo $vrconsulta;




        $vrresultado = mysqli_query($vrconexion, $vrconsulta);


        if ($vrresultado == false) {
        //  header("location: registro.php?error=Hubo un problema");
          ?>
          <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Error Registro</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
                Los Datos no fueron registrados..
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
                <h4 class="modal-title">Registro Exitoso</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
                Los Datos del empleados fueron registrados..
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

      else{
        header("location:registro.php");
      }
}
?>
  			
	
</body>
</html>