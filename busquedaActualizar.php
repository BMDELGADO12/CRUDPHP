<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>busqueda</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container-fluid">
		<div class="jumbotron text-center bg-dark text-white" style="margin-bottom: -60px">
  		<h1>Actualizacion de Datos</h1>
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
          <a href="index.php" class="btn btn-dark btn-md" role="button">Volver</a>
        </div>
        </div>

		<form action="editar.php" method="GET">
  			<div class="form-row justify-content-center">
  				<div class="col-auto ">
  					<input type="text" class="form-control" name="id" placeholder="Identificacion" required="required">	</div>

  					<div class="col-auto">
  						<button type="submit" name="enviando" class="btn btn-dark">Buscar</button>
  					</div>
  			</div>
  			</form>
				
			</div>
		</div>
	</div>
</body>
</html>