<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>

<form action="../logic/logic_register.php" method="post">

<h2>Registrarse</h2>

<div class="input-group">
<label for="name">Nombre</label>
<input type="text" name="name" id="name" placeholder="Nombre">
<label for="contrasena">Contraseña</label>
<input type="password" name="password" id="contrasena" placeholder="Contraseña">
<label for="estado">Estado</label>
<input type="text" name="status" id="estado" placeholder="Estado">

<div class="form-txt">
<a href="../pages/login.php">Iniciar sesion</a>
</div>
<input class="btn" type="submit" value="Enviar">
</div>
</form>
    
</body>
</html>