<?php

require_once "../DB/DB_Connection.php";
$DB = new DB();

$name = $_POST['name'];
$password = $_POST['password'];
$status = $_POST['status'];
$fotoPredeterminada = "../profile_pictures/user-photo-default.webp";
$foto = $fotoPredeterminada;

// if picture is set
if(isset($_FILES['picture'])){

    // Ruta donde se guardará la foto (puedes ajustarla según tu estructura de archivos)
    $ruta_destino = '../profile_pictures/';
   
    // Nombre del archivo original
    $nombre_archivo = $_FILES['picture']['name'];
   
    // Mover el archivo desde el directorio temporal al directorio destino
    if (move_uploaded_file($_FILES['picture']['tmp_name'], $ruta_destino . $nombre_archivo)) {
        // Aquí puedes guardar $nombre_archivo en la base de datos o realizar otras operaciones
        $foto = $nombre_archivo;
        
    }
    
   }

   // if picture is not set
   if(isset($name) && isset($password) && isset($status)){
    $DB->createUser($name, $password, $status, $foto);
   }

?>