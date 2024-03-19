<?php

session_start();
$_SESSION = array();
session_destroy();
header("location: ./connexion.php");





// session_start();
// session_unset();
// session_destroy();
// header("location: index.php");
// exit();