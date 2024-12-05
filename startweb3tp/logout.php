<?php
include("app/config/session.php");
include("app/config/config.php");
session_destroy();
header("Location:index.php");
exit();