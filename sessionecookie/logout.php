<?php
session_start();

session_unset();
session_destroy();


setcookie('usuario', '', time() - 3600, "/");
setcookie('senha', '', time() - 3600, "/");


header("Location: login.php");
exit;
?>

