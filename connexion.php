<?php

$server ="localhost";
$user ="root";
$pass ="";
$db ="trabajo_de_grado";
$conexion = new mysqli($server, $user, $pass, $db);

if($conexion->connect_errno){
    die("conexion faliida0". $conexion->connect_errno);

}else{
    echo "conectado";
}
?>