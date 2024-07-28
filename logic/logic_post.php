<?php

require_once "../DB/DB_Connection.php";
$DB = new DB();

$title = $_POST['title'];
$description = $_POST['description'];

if(isset($_FILES['picture'])){

 // Ruta donde se guardará la foto (puedes ajustarla según tu estructura de archivos)
 $ruta_destino = '../posts-pictures/';

 // Nombre del archivo original
 $nombre_archivo = $_FILES['picture']['name'];

 // Mover el archivo desde el directorio temporal al directorio destino
 if (move_uploaded_file($_FILES['picture']['tmp_name'], $ruta_destino . $nombre_archivo)) {
     // Aquí puedes guardar $nombre_archivo en la base de datos o realizar otras operaciones
     $foto = $nombre_archivo;
 }

}

if(isset($name) && isset($password)){
// catch the id of the user if exist in the database
$id = $DB->login($name, $password);
header("Location: ../pages/main.php?id_user=$id");
}


?>