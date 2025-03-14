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
            <li><a href="cliente.php" class="meumenu " title="Clientes">Clientes</a></li>
            <li><a href="produto.php" class="meumenu meumenu-active" title="Produtos">Produtos</a></li>
            <li><a href="#" class="meumenu" title="Vendas">Vendas</a></li>
        </ul>
    </div>
    <div class="container">
        <hr>
        <div class="formulario">
            <form action="insertionp.php" method="POST" name="formulariop" onsubmit="return validarDadosProduto()">
                <label for="codp">Codigo: </label>
                <input type="text" name="codp" id="codp">
                <p class="erro-input" id="erro-codp"></p>

                <label for="nomep">Nome do Produto: </label>
                <input type="text" name="nomep" id="nomep">
                <p class="erro-input" id="erro-nomep"></p>

                <label for="estoque">Estoque: </label>
                <input type="text" name="estoque" id="estoque">
                <p class="erro-input" id="erro-estoque"></p>

                <label for="preco">Preço: </label>
                <input type="text" name="preco" id="preco">
                <p class="erro-input" id="erro-preco"></p>

                <input type="submit">
            </form>
        </div>
    <table id="produtos">
        <tr>
            <th>Codigo</th>
            <th>Nome do Produto</th>
            <th>Estoque</th>
            <th>Preço</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    <?php  
        include 'conexao.php';

        echo "<h2>Consulta com muitas linhas</h2>";
        $dados = $db->query("SELECT * FROM produto");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC); //Todos os registros retornados
        foreach($todos as $linha){
            $idProduto = $linha['id'];
            $codigoProduto = $linha['codp'];
            $nomeProduto = $linha['nomep'];
            $estoqueProduto = $linha['estoque'];
            $precoProduto = $linha['preco'];

            echo "
                <tr>
                    <td>$codigoProduto</td>
                    <td>$nomeProduto</td>
                    <td>$estoqueProduto</td>
                    <td>$precoProduto</td>
                    <td><a href='produtoAlteracao.php?id=$idProduto'><i class='fa-solid fa-pencil'></i></a></td>
                    <td><a href='deleteproduto.php?id=$idProduto'><i class='fa-solid fa-trash'></i></a></td>
                </tr>
            ";

            
        }
    ?>
    </table>
    </div>
</body>
<script src="./assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/ae2e388f22.js" crossorigin="anonymous"></script>
</html>