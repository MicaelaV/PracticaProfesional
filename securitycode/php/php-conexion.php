<?php
//Conexion a la base
$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "securitycode";


$conexion = mysqli_connect($dBServername,$dBUsername,$dBPassword,$dBName);
mysqli_set_charset($conexion,'utf8');

if (!$conexion) {
	die("Fallo Conexion: ".mysqli_connect_error());
}
?>