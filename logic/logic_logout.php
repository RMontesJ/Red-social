<?php
session_start(); //Empezar sesión 
session_destroy(); //Funcion para cerrar(eliminar) la sesion que estabamos usando
header("Location: ../pages/login.php");//Redirigir automaticamente a la página del login
exit();//Finalizar el script