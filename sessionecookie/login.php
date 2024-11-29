<?php
session_start();


if (isset($_SESSION['usuario']) || (isset($_COOKIE['usuario']) && !empty($_COOKIE['usuario']))) {
    header("Location: dashboard.php");
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeUsuario = $_POST['nomeUsuario'];
    $senha = $_POST['senha'];

    
    $usuarioCorreto = 'sabrina';
    $senhaCorreta = '2007';

    if ($nomeUsuario === $usuarioCorreto && $senha === $senhaCorreta) {
         $_SESSION['usuario'] = $nomeUsuario;

       
        setcookie('usuario', $nomeUsuario, time() + (86400 * 30), "/"); // 30 dias
        setcookie('senha', $senha, time() + (86400 * 30), "/"); // 30 dias


        header("Location: dashboard.php");
        exit;
    } else {
        $erro = "Nome de usuário ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (!empty($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
    <form method="POST">
        <label for="nomeUsuario">Nome de Usuário:</label>
        <input type="text" name="nomeUsuario" id="nomeUsuario" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>


