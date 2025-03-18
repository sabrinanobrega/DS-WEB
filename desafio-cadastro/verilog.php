<?php
    session_start();

    //Verifica se veio do Formulário
    if(isset($_POST['login'])){
        //Verifica se o login esta correto
        include_once('conexao.php');
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $stmt = $db->prepare("SELECT * FROM administrador WHERE email = :login and senha = :senha ");
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
       
        if($stmt->rowCount() > 0){
            $linha = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['login'] = $linha['email'];
            $_SESSION['senha'] = $linha['senha'];
            header("location: index.php");

        }else{
            $_SESSION['erro'] = "Login ou senha invalida";
            header("location: dashboard.php");
        }
    }
?>