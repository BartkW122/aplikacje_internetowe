<?php
define('DB_HOST',"localhost");
define('DB_USER',"root");
define('DB_PASS',"");
define('DB_NAME',"startweb");

$db=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if ($db->connect_errno) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
