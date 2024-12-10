<?php

// Incluindo a conexão com o banco de dados
include_once('conexao.php');

// Recebendo os dados do formulário
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

// Início da inserção dos dados no banco
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

// Executando a query
if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
    header('Location: login.php'); // Redireciona para a página de login
    exit(); // Certifique-se de finalizar o script após o redirecionamento
} else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}

?>
