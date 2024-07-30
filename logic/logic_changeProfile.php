<?php

$id = $_GET['id_user'];

require_once "../DB/DB_Connection.php";
$DB = new DB();

$name = $_POST['name'];
$password = $_POST['password'];
$status = $_POST['status'];
$extra_info = $_POST['extra-info'];

// requires one field to update info
if(isset($name) || isset($password) || isset($status) || isset($extra_info)){
    $DB->editProfile($name, $status, $extra_info, $id);
}


?>