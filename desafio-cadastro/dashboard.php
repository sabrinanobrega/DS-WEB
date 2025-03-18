<?php
    session_start();
    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
        header('Location: index.php');
    }

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<style>
    h1{
        text-align: center;
        font-family: calibri;
    }
    body {
    background-color: #f4f4f4;
}
.horizontal {
    margin: 0 auto;
    width: 500px;
}
.horizontal div {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px 30px 30px 30px;
    border-radius: 8px;
    background: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    font-family: calibri;
}
form{
    width: 100%;
}
label {
    display: block;
    margin-top: 10px;
}
input, textarea {
    width: 100%;
    padding: 8px 0px 8px 0px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
  
}
input[type=submit] {
    margin-top: 15px;
    width: 100%;
    padding: 10px;
    border: none;
    background-color: blue;
    color: white;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    font-family: calibri;
}
input:hover[type=submit] {
    background-color: green;
}

/* Mensagens de erro */
.erro-input {
    color: red;
    font-size: 15px;
}

/* Tirando estilo de links */
a {
    text-decoration: none;
    color: black;
}

.select{
    font-family:Arial;
    font-size: 16px;
    width: 40%;
    border-color: blue;
    
    
}
    


    </style>
</head>
<body>
<h1>Login</h1>
    <div class="horizontal">
        <div>
           
            <form action="./verilog.php" method="POST">
                <br>
                <label>Email:</label>
                <input type="text" name="login">
                <br>
                <label>Senha:</label>
                <input type="password" name="senha" class="" maxlength="20" required >
                <br>
                <?php
                    if(isset($_SESSION['erro'])){
                        echo $_SESSION['erro'];
                    }
                ?>
                <p>Escolha:</p>
                <select class="select">
                    <option value="valor1">Administrador</option>
                    <option value="valor2" selected>CEO</option>
                    <option value="valor3">Chefe</option>
</select>
                
                <br><br>
                <input type="submit">  
        </form>
        <br><br><br>

       

</body>
</html>