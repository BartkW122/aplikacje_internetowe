<?php

header('Content-Type: text/html; charset=UTF-8');

require('app/config/config.php');
require('app/config/db.php');
require('app/config/session.php');
require('app/functions/validate.function.php');
require('app/functions/helper.function.php');
include ('templates/messages.html.php');

if(isset($_SESSION['user'])){
    include ('templates/MasterPage.html.php');
}else{
    include('templates/LoginPage.html.php');
}

if (isset($_SESSION['message'])) unset($_SESSION['message']);
