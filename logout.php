<?php
session_start();
session_destroy();
$_SESSION["password"]=0;
header('Location: index.php');
?>