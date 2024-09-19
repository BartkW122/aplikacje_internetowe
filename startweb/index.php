<?php
require "app/config/db.php";
require "functions/templates/form.html.php";
require "app/config/config.php";
$name =$db->real_escape_string($_POST['name']);
$surn =$db->real_escape_string($_POST['surn']);
$mail =$db->real_escape_string($_POST['mail']);
$pass =$db->real_escape_string($_POST['pass']);
if(empty($name)||empty($surn)||empty($mail)||empty($pass)){
    echo"musisz wypelnić pola!!";
}else{

$pass_hash=md5($pass.PASS_SALT);
$dodanie="INSERT INTO users(id,user_name,user_surname,user_email,user_password,user_active) VALUES (NULL,'$name','$surn','$mail','$pass',0)";
//$dodanie="INSERT INTO users(id,user_name,user_surname,user_email,user_password,user_active) VALUES (NULL,'test2','test2','test2','test2',0)";
if($db->query($dodanie)){
    echo"dodano uzytkownika";
}
}