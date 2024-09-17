<?php
require "app/config/db.php";
require "functions/templates/form.html.php";
$name = $_POST['name'];
$surn = $_POST['surn'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];


$dodanie="INSERT INTO users(id,user_name,user_surname,user_email,user_password,user_active) VALUES (NULL,'$name','$surn','$mail','$pass',0)";
//$dodanie="INSERT INTO users(id,user_name,user_surname,user_email,user_password,user_active) VALUES (NULL,'test2','test2','test2','test2',0)";
if($conn->query($dodanie)){
    echo"dodano uzytkownika";
}