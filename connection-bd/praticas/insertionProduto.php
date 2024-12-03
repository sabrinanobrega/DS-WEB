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
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];

// Inserir dados na tabela 'produto'
$sql = "INSERT INTO produto (nome, preco, estoque) VALUES ('$nome', '$preco', '$estoque')";

if (mysqli_query($conexao, $sql)) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar produto: " . mysqli_error($conexao);
}

// Fechar conexão
mysqli_close($conexao);
?>
<br>
<a href="index.php">Voltar para a página inicial</a>
