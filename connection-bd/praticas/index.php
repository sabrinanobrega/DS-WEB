<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1, h2 {
            text-align: center;
        }
        .form-box {
            margin-bottom: 20px;
        }
        form label, form input, form button {
            display: block;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Produtos e Clientes</h1>

    <div class="form-box">
        <h2>Cadastro de Produtos</h2>
        <form action="insertionProduto.php" method="POST">
            <label for="nomeProduto">Nome do Produto:</label>
            <input type="text" id="nomeProduto" name="nome" required>

            <label for="precoProduto">Preço:</label>
            <input type="number" id="precoProduto" name="preco" step="0.01" required>

            <label for="estoqueProduto">Estoque:</label>
            <input type="number" id="estoqueProduto" name="estoque" required>

            <button type="submit">Cadastrar Produto</button>
        </form>
    </div>

    <div class="form-box">
        <h2>Cadastro de Clientes</h2>
        <form action="insertionCliente.php" method="POST">
            <label for="nomeCliente">Nome do Cliente:</label>
            <input type="text" id="nomeCliente" name="nome" required>

            <label for="emailCliente">E-mail:</label>
            <input type="email" id="emailCliente" name="email" required>

            <label for="telefoneCliente">Telefone:</label>
            <input type="text" id="telefoneCliente" name="telefone">

            <button type="submit">Cadastrar Cliente</button>
        </form>
    </div>

    <h2>Produtos Cadastrados</h2>
    <?php
    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "usbw", "loja");

    if ($conn->connect_error) {
        die("Erro ao conectar com o banco de dados: " . $conn->connect_error);
    }

    // Consulta à tabela 'produto'
    $queryProduto = "SELECT * FROM produto";
    $resultProduto = $conn->query($queryProduto);

    if ($resultProduto->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nome</th><th>Preço</th><th>Estoque</th></tr>";
        while ($row = $resultProduto->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nome']}</td>
                    <td>{$row['preco']}</td>
                    <td>{$row['estoque']}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Nenhum produto cadastrado.</p>";
    }
    ?>

    <h2>Clientes Cadastrados</h2>
    <?php
    // Consulta à tabela 'cliente'
    $queryCliente = "SELECT * FROM cliente";
    $resultCliente = $conn->query($queryCliente);

    if ($resultCliente->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nome</th><th>E-mail</th><th>Telefone</th></tr>";
        while ($row = $resultCliente->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nome']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['telefone']}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Nenhum cliente cadastrado.</p>";
    }

    // Fechando a conexão
    $conn->close();
    ?>
</body>
</html>