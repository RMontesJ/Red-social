<?php

$id = $_GET['id_user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="../css/nav.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/post.css?v=<?php echo time(); ?>">
    <script src="../valid/post.js?v=<?php echo time(); ?>" defer></script>
</head>
<body>
    
<div class="page">

<?php include "../includes/nav.php" ?>

<div class="createPost">

<form action="../logic/logic_post.php?id_user=<?php echo $id ?>" method="post" id="form" enctype="multipart/form-data">

<h2>Crear publicacion</h2>

<div class="input-group">
<label for="titulo">Titulo</label>
<input type="text" name="title" id="title" placeholder="Titulo">
<p id="corregirTitle"></p>
<label for="descripción">Descripción</label>
<input type="text" name="description" id="description" placeholder="Descripción">
<p id="corregirDescription"></p>
<label for="foto">Foto (extensión .png .jpeg .jpg .webp)</label>
<input type="file" name="picture" id="picture" placeholder="Foto">
<div class="form-txt">

</div>
<input class="btn" type="submit" value="Enviar">
</div>
</form>
    
</div>

</div>

</body>
</html>