<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/form.css?v=<?php echo time(); ?>">
</head>
<body>

<form action="../logic/logic_login.php" method="post">

<h2>Inicio de sesion</h2>

<div class="input-group">
<label for="name">Nombre</label>
<input type="text" name="name" id="name" placeholder="Nombre">
<label for="contrasena">Contraseña</label>
<input type="password" name="password" id="contrasena" placeholder="Contraseña">

<div class="form-txt">
<a href="../pages/register.php">Registrarse</a>
</div>
<input class="btn" type="submit" value="Enviar">
</div>
</form>
    
</body>
</html>