<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        echo "<script>alert('Esta faltando o metodo POST')
            window.location.href = 'produto.php';
            </script>";
        //header("Location: index.php"); Redirecionamento com PHP
    }
   
        $codp = $_POST['codp'];
        $nomep = $_POST['nomep'];
        $estoque = $_POST['estoque'];
        $preco = $_POST['preco'];
        $id = $_GET['id'];

        include "conexao.php";

        echo "<h2>Inserindo dados</h2>";
        $statement = $db->prepare("UPDATE produto SET codp = :codp, nomep = :nomep, estoque = :estoque, preco = :preco WHERE id = :id");
        $statement->bindParam(':codp', $codp);
        $statement->bindParam(':nomep', $nomep);
        $statement->bindParam(':estoque', $estoque);
        $statement->bindParam(':preco', $preco);
        $statement->bindParam(':id', $id);
        $statement->execute();
        

        header("Location: produto.php"); //Redirecionamento com PHP
    
?>