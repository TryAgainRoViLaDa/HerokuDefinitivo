<?php
//$Posicion;
//$json json_encode($Posicion);
//echo $json;
 $posicionX = $_POST["posX"];
 $posicionY = $_POST["posY"];
 echo $posicionX;
 //echo $posicionY;

 $sql_actualizar = "UPDATE partida SET posicioX_jug = [$posicionX] WHERE codi = 1;"
 //$sql_agregar = "UPDATE jugadors (nick, contrasenya) VALUES ('$usuario_nuevo', '$contrasena2')";
 //$resultado = mysqli_query($con, $sql_agregar);

 /*$sql_agregar = "INSERT INTO jugadors (nick, contrasenya) VALUES ('$posicionX', '$posicionY')";
 $resultado = mysqli_query($con, $sql_agregar);
 $sql_agregar = null;
 $con = null;*/
?>