<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busines System - Produtos</title>
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="shortcut icon" type="imagex/png" href="./assets/img/ico.svg">
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
            <li><a href="cliente.php" class="meumenu" title="Clientes">Clientes</a></li>
            <li><a href="produto.php" class="meumenu meumenu-active" title="Produtos">Produtos</a></li>
            <li><a href="#" class="meumenu" title="Vendas">Vendas</a></li>
        </ul>
    </div>
    <div class="container">
        <hr>
        <?php  
                if($_SERVER['REQUEST_METHOD'] != 'GET' OR !isset($_GET['id'])){
                    header("Location: produto.php");
                }
                include 'conexao.php';

                $id = $_GET['id'];
                $stmt = $db->prepare("SELECT * FROM produto WHERE id = :id");
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                $dados = $stmt->fetch(PDO::FETCH_ASSOC); //Todos os registros retornados
                
                $idProduto = $dados['id'];
                $codigoProduto = $dados['codp'];
                $nomeProduto = $dados['nomep'];
                $estoqueProduto = $dados['estoque'];
                $precoProduto = $dados['preco'];
               
                
            ?>
        <div class="formulario">
            <form action="produtoUpdate.php?id=<?=$idProduto;?>" method="POST" name="formulario" onsubmit="return validarDadosProduto()">
                <label for="codp">Codigo: </label>
                <input type="text" name="codp" id="codp" value="<?= $codigoProduto;?>">
                <p class="erro-input" id="erro-codp"></p>

                <label for="nomep">Nome: </label>
                <input type="text" name="nomep" id="nomep\\" value="<?= $nomeProduto;?>">
                <p class="erro-input" id="erro-nome"></p>

                <label for="estoque">Estoque: </label>
                <input type="text" name="estoque" id="estoque" value="<?= $estoqueProduto;?>">
                <p class="erro-input" id="erro-estoque"></p>

                

                <label for="preco">Preço: </label>
                <input type="text" name="preco" id="preco" value="<?= $precoProduto;?>">
                <p class="erro-input" id="erro-preco"></p>


                
                <input type="submit">
            </form>
        </div>

    </div>
</body>
<script src="./assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/ae2e388f22.js" crossorigin="anonymous"></script>
</html>