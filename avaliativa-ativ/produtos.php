<<?php
include_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validação para garantir que os campos estão preenchidos
    $nome = isset($_POST['nome']) ? mysqli_real_escape_string($conexao, $_POST['nome']) : null;
    $preco = isset($_POST['preco']) ? mysqli_real_escape_string($conexao, $_POST['preco']) : null;
    $quantidade = isset($_POST['quantidade']) ? (int)$_POST['quantidade'] : null;

    // Verifica se os valores obrigatórios estão definidos
    if ($nome && $preco && $quantidade !== null) {
        $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES ('$nome', '$preco', $quantidade)";
        if (mysqli_query($conexao, $sql)) {
            echo "Novo registro inserido com sucesso!";
            header('Location: login.php');
            exit;
        } else {
            echo "Erro ao inserir: " . mysqli_error($conexao);
        }
    } else {
        echo "Por favor, preencha todos os campos corretamente.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
