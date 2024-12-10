<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Lora:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6f0; /* Rosa claro para o fundo */
            color: #333;
            font-family: 'Poppins', sans-serif; /* Fonte mais moderna e limpa */
            margin: 0;
            height: 100vh; /* Garantir que o body ocupe toda a altura da tela */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center; /* Centralizar texto */
        }

        .clientes {
            background-color: #ffcce0; /* Rosa mais forte para o formulário */
            padding: 20px;
            border: 1px solid #ff99b3; /* Contorno em rosa mais escuro */
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
            color: #800040; /* Tom de rosa escuro */
            font-family: 'Lora', serif; /* Fonte mais sofisticada para labels */
        }

        input[type="text"],
        input[type="password"] {
            width: 280px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ff99b3; /* Contorno em rosa escuro */
            border-radius: 5px;
            font-size: 14px;
            color: #800040; /* Texto em rosa escuro */
            font-family: 'Poppins', sans-serif; /* Fonte moderna para inputs */
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
            font-family: 'Poppins', sans-serif; /* Fonte para o botão */
        }

        input[type="submit"]:hover {
            background-color: #cc5280; /* Tom mais escuro para o hover */
        }

        h2 {
            color: #e60073; /* Título em rosa escuro vibrante */
            font-family: 'Lora', serif; /* Fonte mais sofisticada para título */
            font-weight: 600;
            font-size: 28px;
        }
    </style>
</head>

<body>
    <div class="clientes">
        <h2>Cadastro</h2>
        <form action="root.php" method="POST">
            <label for="nome-cliente">Nome:</label>
            <input type="text" id="nome-cliente" name="nome" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>

