<?php

$id = $_GET['id_user'];

require_once "../DB/DB_Connection.php";
$DB = new DB();
$id_publisher = $DB->catchName($id);

$title = $_POST['title'];
$description = $_POST['description'];
$extension = $_FILES['picture']['type'];

if(isset($_FILES['picture'])){

    if(strpos($extension, 'png') || strpos($extension, 'jpeg') || strpos($extension, 'jpg') || strpos($extension, 'webp')){

// Ruta donde se guardará la foto (puedes ajustarla según tu estructura de archivos)
    $ruta_destino = '../posts-pictures/';

// Nombre del archivo original
    $nombre_archivo = $_FILES['picture']['name'];

// Mover el archivo desde el directorio temporal al directorio destino
if (move_uploaded_file($_FILES['picture']['tmp_name'], $ruta_destino . $nombre_archivo)) {
    // Aquí puedes guardar $nombre_archivo en la base de datos o realizar otras operaciones
    $foto = $nombre_archivo;
    $DB->createPost($title, $description, $foto, $id, $id_publisher);
}

}

// si no has puesto foto, te pone la foto predeterminada
else if ($_FILES['picture']['name'] == ""){
    $foto = $fotoPredeterminada = '../posts-pictures/default-picture.png';
    $DB->createPost($title, $description, $foto, $id);
}

else{
    header("Location: ../pages/post.php?id_user=$id");
}

}

?>