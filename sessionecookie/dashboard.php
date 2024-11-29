<?php
session_start();


if (!isset($_SESSION['usuario']) && (!isset($_COOKIE['usuario']) || empty($_COOKIE['usuario']))) {
    header("Location: login.php");
    exit;
}


$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : $_COOKIE['usuario'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo htmlspecialchars($usuario); ?>!</h1>
    <a href="logout.php"><button>Sair</button></a>
</body>
</html>

