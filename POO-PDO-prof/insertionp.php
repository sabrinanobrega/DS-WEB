<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        echo "<script>alert('Esta faltando o metodo POST')
            window.location.href = 'produto.php';
            </script>";
        //header("Location: index.php"); Redirecionamento com PHP
    }
   
    $cod = $_POST['codp'];
    $nome = $_POST['nomep'];
    $estoque = $_POST['estoque'];
    $preco = $_POST['preco'];

        include "conexao.php";

        echo "<h2>Inserindo dados</h2>";
        $statement = $db->prepare("INSERT INTO produto (codp, nomep, estoque, preco) VALUES (:codp, :nomep, :estoque, :preco)");
        $statement->bindParam(':codp', $cod);
        echo "<br>";
        $statement->bindParam(':nomep', $nome);
        echo "<br>";
        $statement->bindParam(':estoque', $estoque);
        echo "<br>";
        $statement->bindParam(':preco', $preco);

        $statement->execute();
        

        header("Location: produto.php"); //Redirecionamento com PHP
    
?>