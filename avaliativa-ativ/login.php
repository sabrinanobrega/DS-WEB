<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários Lado a Lado</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Lora:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            color: #333;
            font-family: 'Poppins', sans-serif;
            padding: 20px;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 30px;
            padding: 20px;
        }

        .produtos {
            background-color: #ffe6f0; /* Rosa claro */
            padding: 20px;
            border: 1px solid #ff99cc; /* Rosa mais forte */
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
        }

        .clientes {
            text-align: center;
            margin-bottom: 20px;
            background-color: #e6ffe6; /* Verde claro */
            padding: 20px;
            border: 1px solid #99cc99; /* Verde mais forte */
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
            color: #333;
            font-family: 'Lora', serif;
        }

        input[type="text"],
        input[type="number"] {
            width: 280px;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
            font-family: 'Poppins', sans-serif;
        }

        input[type="submit"], button {
            width: 300px;
            padding: 12px;
            font-size: 16px;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-family: 'Poppins', sans-serif;
        }

        input[type="submit"] {
            background-color: #ff66a3; /* Rosa vibrante */
        }

        input[type="submit"]:hover {
            background-color: #cc5280; /* Rosa escuro no hover */
        }

        button {
            background-color: #66cc66; /* Verde vibrante */
        }

        button:hover {
            background-color: #339933; /* Verde escuro no hover */
        }

        h2 {
            text-align: center;
            color: #e60073; /* Rosa escuro para o título */
            font-family: 'Lora', serif;
            font-weight: 600;
            font-size: 28px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Cadastro de Produtos -->
        <div class="produtos">
            <h2>Cadastro de Produtos</h2>
            <form action="produtos.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="preco">Valor:</label>
                <input type="number" id="preco" name="preco" required>

                <label for="quantidade">Quantidade:</label>
                <input type="text" id="quantidade" name="quantidade" required>

                <input type="submit" value="Enviar">
                <br><br>

                <!-- Botão para voltar ao login.php -->
                <a href="index.php">
                    <button type="button">Voltar para o Login</button>
                </a>
                <br><br>
                <a href="cookie.php">
                    <button type="button">Adicionar cookie</button>
                </a>
            </form>
            <?php
            include_once('conexao.php');
            echo "<br>";
            $sql = "SELECT * FROM produtos ORDER BY nome ASC";
            $resultado = mysqli_query($conexao, $sql);
            if (mysqli_num_rows($resultado) > 0) {
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "<br>";
                }
            } else {
                echo "Nenhum registro encontrado.";
            }
            ?>
        </div>

        <!-- Cadastro de Clientes -->
        <div class="clientes">
            <h2>Cadastro de Clientes</h2>
            <form action="usuarios.php" method="POST">
                <label for="nome-cliente">Nome:</label>
                <input type="text" id="nome-cliente" name="nome" required>
                
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>

                <label for="senha">Senha:</label>
                <input type="number" id="senha" name="senha" required>
                
                <input type="submit" value="Enviar">
                <br><br>
                <a href="index.php">
                    <button type="button">Voltar para o Login</button>
                </a>
                <br><br>
                <a href="cookie.php">
                    <button type="button">Adicionar cookie</button>
                </a>
            </form>
            <?php
            include_once('conexao.php');
            echo "<br>";
            $sql = "SELECT * FROM usuarios ORDER BY nome ASC";
            $resultado = mysqli_query($conexao, $sql);
            if (mysqli_num_rows($resultado) > 0) {
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "<br>";
                }
            } else {
                echo "Nenhum registro encontrado.";
            }
            ?>
        </div>
    </div>
</body>
</html>
