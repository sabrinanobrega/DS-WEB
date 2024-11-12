<?php

 {
     $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $usuarioCorreto = "aluno";
    $senhaCorreta = "sesi";

    if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
        echo "<h2>Login bem-sucedido! Bem-vindo, $usuario.</h2>";
    } else {
        echo "<h2>Usuário ou senha incorretos. Tente novamente.</h2>";
    }

    echo "<p><a href='index.html'>Voltar para a página de login</a></p>";
}
?>