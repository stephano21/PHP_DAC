<?php
include("bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");


$rif = $_POST['rif'];
$ced = $_POST['ced'];
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$dir = $_POST['dir'];
$cell = $_POST['cell'];
$tel = $_POST['tel'];
$contact = $_POST['nContact'];
$fing = $_POST['fing'];
$fcul = $_POST['fcul'];
$sueldo = $_POST['sueldo'];
$naci = $_POST['nacionalidad'];
$tienda = $_POST['tienda'];
$cargo = $_POST['cargo'];
//get filename
$filename = $_FILES['foto']['name'];
$sourceFile= $_FILES['foto']['tmp_name'];
//generate random name 
function generate_new_name( $size){
    $N_generate= substr( md5(microtime()), 1, $size);
    return $N_generate;

}

//rename file
function rename_file($filename,$newName){
    $explode = explode('.', $filename);
    $extension_file = array_pop($explode);
    $nuevoNameFile = $newName. '.'. $extension_file;
    
    return $nuevoNameFile;
}


//Create and remove file location
function upload_location_file($dirLocal, $file, $sourceFile) {
    $path = getcwd();

    if (!file_exists($path . $dirLocal)) {
        mkdir($path . $dirLocal, 0777, true);
        
    }

    $destination = $path .'/'. $dirLocal . '/' . $file;
    if (move_uploaded_file($sourceFile, $destination)) {
        return $dirLocal . '/' . $file;
    } else {
        return false; // Opcionalmente, puedes manejar errores de movimiento de archivo aquí
    }
}

$dirLocal = "img";
$newName=generate_new_name(10);
$file = rename_file($filename, $newName);//new name + extencion
$url = upload_location_file($dirLocal,$file,$sourceFile);
echo $url;
        

$sql = "INSERT INTO `Empleados`(`RIF`, `cedula`, `nombre`, `apellido`, `direccion`, `celular`, `telefono`, `n_contactp`, `f_ingreso`, `f_culminacion`, `sueldo`, `foto`, `nacionalidad`, `tienda`, `cargo`) VALUES ('$rif','$ced','$nom','$ape','$dir','$cell','$tel','$contact','$fing','$fcul','$sueldo','$url','$naci','$tienda','$cargo')";
echo $sql;
$respuesta = $db->query($sql);

header("location:index.php")

?>