<?php

require_once "../DB/DB_Connection.php";
$DB = new DB();

$name = $_POST['name'];
$password = $_POST['password'];
$status = $_POST['status'];

// catch the id of the user if exist in the database
$DB->createUser($name, $password, $status);

header("Location: ");

?>