<?php
$usuario=$_POST['username'];
$clave=$_POST['password'];
$conexion=mysqli_connect("us-cdbr-iron-east-02.cleardb.net","bb5266e3acc78f","3d63723a","heroku_397bf9fd40a3664");
$consulta="select * from login where username='$usuario' and password='$clave'";//seleccion que debe ser verdadera 
$resultado=mysqli_query($conexion,$consulta);//ejecuta 
$fila=mysqli_num_rows($resultado);
if ($fila > 0 ) {  //si consigue un dato
	header("location:depor.php");
}else{
	header("location:login.php");
}
?>