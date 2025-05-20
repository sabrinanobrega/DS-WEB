<?php

$subRota = $caminho[1] ?? null;
$url = $_SERVER['REQUEST_URI'];

switch ($subRota) {
    case '':
        require './models/produto.php';
        $produto = new Produto;
        $dados = $produto->queryAll();
        require './views/produtos/consultaProdutos.php';
        break;

    case 'cadastro':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require './models/produto.php';
            $produto = new Produto;
            $produto->cadastroProduto($_POST);
            header('Location: /mvc_php/produto');
            exit;
        } else {
            require './views/produtos/cadastroProduto.php';
        }
        break;

    case 'excluir':
        if (isset($_GET['id'])) {
            require './models/produto.php';
            $produto = new Produto;
            $produto->excluirProduto($_GET['id']);
            header('Location: /mvc_php/produto');
            exit;
        } else {
            echo "ID do produto não fornecido.";
        }
        break;

    default:
        if (preg_match('/^\/produto\/([0-9]+)$/', $url, $matches)) {
            $id = $matches[1];
            require './models/produto.php';
            $produto = new Produto;
            $dados = $produto->queryOne([":idProduto" => $id]);
            require './views/produtos/consultaProduto.php';
        } else {
            http_response_code(404);
            echo "Página não encontrada.";
        }
        break;
}

?>
