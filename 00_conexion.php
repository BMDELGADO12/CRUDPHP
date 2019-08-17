<?php

$db_host = "localhost";
$db_usuario = "root";
$db_pass = "";
$db_nombre ="compania";

$vrconexion = mysqli_connect($db_host,$db_usuario, $db_pass, $db_nombre);

if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BD";

	exit();
}


mysqli_set_charset($vrconexion, "utf8");

 ?>