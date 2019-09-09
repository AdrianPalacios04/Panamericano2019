	<?php
/*Datos de conexion a la base de datos*/
$db_host = "us-cdbr-iron-east-02.cleardb.net";
$db_user = "bb5266e3acc78f";
$db_pass = "3d63723a";
$db_name = "heroku_397bf9fd40a3664";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}

?>