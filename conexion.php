<?php

function conectar()
{
	$user="sql11416145";
	$pass="tnpUz33bFh";
	$server="sql11.freemysqlhosting.net";
	$db="sql11416145";
	$con=new mysqli($server, $user, $pass, $db) or die ("Error al conectar a la base de datos");

	return $con;
}

?>