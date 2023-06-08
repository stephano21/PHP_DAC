<?php
include("bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");


$idemp = $_POST['idregistro'];

$nom = $_POST['nombre'];
$ced = $_POST['ced'];
$ciu = $_POST['ciudad'];
$fna = $_POST['fnac'];
$cor = $_POST['correo'];
$hal = $_POST['halm'];
$sex = $_POST['Erd001'];

$dir = 'DONDE SEA';
$telf = "0912365544";
$rol = 1;
$usu = 1;

$sentencia = "UPDATE `empleado` SET 
            `nombre`='$nom',`cedula`='$ced',
            `direc`='$dir',`telf`='$telf',
            `correo`='$cor',`sexo`='$sex',
            `fecha_nac`='$fna',`ciudad`='$ciu',
            `hora_alm`='$hal',`rol_id`='$rol',
            `usu_id`='$usu' WHERE
                emp_id=$idemp";

$respuesta = $db->query($sentencia);

header("location:index.php")

?>