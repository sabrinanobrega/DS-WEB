<?php 
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        echo "<script>alert('Esta faltando o metodo POST')
            window.location.href = 'index.php';
            </script>";
        //header("Location: index.php"); Redirecionamento com PHP
    }
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cargo = $_POST['cargo'];
        $senha = $_POST['senha'];

        include "conexao.php";

        echo "<h2>Inserindo dados</h2>";
        $statement = $db->prepare("INSERT INTO administrador (nome, email, cargo, senha) VALUES (:nome, :email, :cargo, :senha)");
        $statement->bindParam(':nome', $nome);
        echo "<br>";
        $statement->bindParam(':email', $email);
        echo "<br>";
        $statement->bindParam(':cargo', $cargo);
        echo "<br>";
        $statement->bindParam(':senha', $senha);
        $statement->execute();

        header("Location: index.php"); //Redirecionamento com PHP



?>