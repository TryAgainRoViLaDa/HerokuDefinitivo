<?php

function conectar()
{
	$user="sql11415792";
	$pass="2yZ3rQx4uI";
	$server="sql11.freemysqlhosting.net";
	$db="sql11415792";
	$con=new mysqli($server, $user, $pass, $db) or die ("Error al conectar a la base de datos");

	return $con;
}

?>