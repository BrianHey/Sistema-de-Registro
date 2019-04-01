<?php
	$conexion = mysql_connect('localhost','root','') or die("Problemas para conectarse con el servidor");


	mysql_select_db('registro', $conexion);

?>