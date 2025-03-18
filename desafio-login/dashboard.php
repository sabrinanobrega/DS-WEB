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
    
        .horizontal{
            display: flex;
            padding: 20px;
            justify-content: center;
        }
        .horizontal div{
         display: flex;
         width: 30%;
        justify-content: center;
        align-items: center;
        padding: 20px 30px 30px 30px;
        border-radius: 8px;
        background: rgba(133, 239, 227, 0.755);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1{
            text-align: center;
            font-family: sans-serif;
        }
        
label {
    display: block;
    margin-top: 50px;
 
}
input {
    
    width: 150%;
    padding: 8px 0px 8px 0px;
    margin-top: 5px;
    border: 1px solid #ffffff;
    border-radius: 4px;
}
input[type=submit] {
    margin-top: 10px;
    width: 150%;
    align-items: center;
    padding: 10px;
    border: none;
    background-color: #000000;
    color: white;
    font-size: 15px;
    border-radius: 4px;
    cursor: pointer;
}
p {
    font-family:Arial;
 }
input:hover[type=submit] {
    background-color: blue;
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
                
                <br><br>
                <input type="submit">  
        </form>
        <br><br><br>

       

</body>
</html>