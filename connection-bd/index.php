<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conection</title>
</head>
<body>
    <form action="insertion.php" method="POST">
        <label>nome</label>
        <input type="text" name="nome">
        <br>
        <label>email:</label>
        <input type="text" name="email">
        <br>
        <label>senha:</label>
        <input type="text" name="senha">
        <br>
        <input type="submit">
</form>
<br><br><br>
<?php
include_once('conection.php');

$sql = "SELECT * FROM funcionario";
$resultado = mysqli_query($conexao, $sql);

// Verificar se há registros
if (mysqli_num_rows($resultado) > 0) {
    while ($linha = mysqli_fetch_assoc($resultado)) {
     echo "ID: " . $linha['id'] . " - Nome: " . $linha
['nome'] . "<br>";
}
} else {
echo "Nenhum registro encontrado.";
}

?>
</body>
</html>