<?php

//echo password_hash("bluuweb", PASSWORD_DEFAULT). "\n";

$usuario_nuevo = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$contrasena2 = $_POST['contrasena2'];
$posX = 64;
$posY = 2493;

$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

/*echo '<pre>';
var_dump($usuario_nuevo);
var_dump($contrasena);
var_dump($contrasena2);
echo '</pre>';*/

if (password_verify($contrasena2, $contrasena)) {

	include_once 'principal.php';
	//echo $sql_agregar;

	$consulta="SELECT * FROM jugadors where nick='$usuario_nuevo'";
	$resultado=mysqli_query($con, $consulta);
	//echo "$consulta";

	$filas=mysqli_num_rows($resultado);

	if ($filas == 1) {
		echo "ERROR, ese usuario ya existe";
	}else{
		$sql_agregar = "INSERT INTO jugadors (nick, contrasenya) VALUES ('$usuario_nuevo', '$contrasena2')";
		$resultado = mysqli_query($con, $sql_agregar);

		$consultaCodi = "SELECT codi FROM jugadors WHERE nick = '$usuario_nuevo'";
		echo $consultaCodi;
		$resultado2 = mysqli_query($con, $consultaCodi);
		$variable = mysqli_fetch_object($resultado2, $con);
		//echo $variable;
		//$InsertId = "INSERT INTO partida (id_jugador) VALUES $codigo";
		//$resultado3 = mysqli_query($con, $InsertId); // valor del select del codigo

		echo "La contraseña es valida";
		header("location:web/index.html");
	}

	//$consulta="SELECT * FROM jugadors where nick='$usuario' AND contrasenya='$contrasena'";
	//$resultado=mysqli_query($con, $consulta);

	/*if ($resultado->execute(array($usuario_nuevo, $contrasena)) ) {
		echo "Insertado";
	}else{
		echo "Error";

		$sql_agregar2 = "INSERT INTO partida (posicioX_jug, posicioY_jug) VALUES ('$posX', '$posY')";
		$resultado2 = mysqli_query($con, $sql_agregar2);

	}*/

	$con = null;

}else{
	echo "La contraseña no es valida";
}