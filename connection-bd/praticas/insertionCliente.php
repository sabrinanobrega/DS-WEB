<?php
// Conexão com o banco de dados
$host = 'localhost';
$usuario = 'root';
$senha = 'usbw';
$banco = 'loja';

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verificar se a conexão foi bem-sucedida
if (!$conexao) {
    die('Erro na conexão: ' . mysqli_connect_error());
}

// Receber dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

// Inserir dados na tabela 'cliente'
$sql = "INSERT INTO cliente (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

if (mysqli_query($conexao, $sql)) {
    echo "Cliente cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar cliente: " . mysqli_error($conexao);
}

// Fechar conexão
mysqli_close($conexao);
?>
<br>
<a href="index.php">Voltar para a página inicial</a>
