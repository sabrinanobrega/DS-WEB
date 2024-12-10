<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        body {
            background-color: #ffe6f0; /* Rosa claro para o fundo */
            color: #333;
            font-family: Arial, sans-serif;
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
            background-color: #ffcce0; /* Rosa mais forte para o formulário */
            padding: 20px;
            border: 1px solid #ff99b3; /* Contorno em rosa mais escuro */
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 8px;
            color: #800040; /* Tom de rosa escuro */
        }

        input[type="text"],
        input[type="number"] {
            width: 280px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ff99b3; /* Contorno em rosa escuro */
            border-radius: 5px;
            font-size: 14px;
            color: #800040; /* Texto em rosa escuro */
        }

        input[type="submit"] {
            width: 300px;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #ff66a3; /* Botão em rosa vibrante */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #cc5280; /* Tom mais escuro para o hover */
        }

        h2 {
            text-align: center;
            color: #e60073; /* Título em rosa escuro vibrante */
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
                
                <label for="preco">Preço:</label>
                <input type="number" id="preco" name="preco" step="0.01" required>
                
                <label for="quantidade">Quantidade:</label>
                <input type="number" id="quantidade" name="quantidade" required>
                
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>
