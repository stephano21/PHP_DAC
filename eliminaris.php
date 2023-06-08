<?php
include("bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");


$idemp = $_GET['id'];

$sentencia = "update empleado set estado=0 where emp_id=$idemp";
$respuesta = $db->query($sentencia);

header("location:index.php")

?>