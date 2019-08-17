<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario Empresa</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

  

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
       <div class="jumbotron text-center bg-dark text-white "  style="margin-bottom:-60px">
        <h1 class="Display-1">Compania S.A</h1>
        <p>Gestion y Tecnologia</p> 
        <div class="row">
          <div class="col-sm-4">
      <img src="img/Compania s.a(1).png"  class="rounded-circle" alt="Compania">
      </div>
      </div>
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
        <a class="nav-link" href="registro.php">Registro de Datos</a>
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

 <div class="row justify-content-center">
              
        <form action="busquedaDatos.php" method="POST">
        <div class="form-row justify-content-center">
          <div class="col-auto">
            <input type="text" class="form-control" name="buscar" placeholder="Nombre" required="required"> </div>

            <div class="col-auto">
              <button type="submit" name="enviando" class="btn btn-dark">Buscar</button>
            </div>
        </div>
        </form>
        
        </div>

           <div class="jumbotron text-center" style="margin-top:160px">
          <p>Copyright © 2019</p>
          <p>Desarrollado por Brayan Delgado</p>
          </div>

</div>

        

	
</body>
</html>