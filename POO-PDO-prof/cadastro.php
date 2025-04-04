<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        h2{
    text-align: center;
}
h1{
    text-align: center;
}
ul {
    padding-inline-start: 0em;
    width: 100%;
    float: left;
    text-align: center;
}
li {
    padding-left: 10px;
    padding-right: 10px;
    display: inline-block;
    list-style: none;
}
li .meumenu {
   font-family: 'open_sansbold';
   font-size: 1.6em;
   text-decoration: none;
   color: #000000;
   border: 0 1px 0 0 #4c4c4c;
   border-bottom: 4px solid transparent;
   transition: border-bottom .3s linear;
}
p {
    font-family: Verdana;
 }
li .meumenu:hover {
    border-bottom: 4px solid #53b8b1;
}
li .meumenu-active {
    border-bottom: 4px solid #020209;
}
        /*menu horizontal*/
h1{
        text-align: center;
        font-family: calibri;
    }
    body {
    background-color: #f4f4f4;
}
.formulario {
    margin: 0 auto;
    width: 500px;
}
.form {
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
<div class="menu">
        <ul>
            <li><a href="index.php" class="meumenu meumenu-active" title="Home">Home</a></li>
            <li><a href="cliente.php" class="meumenu" title="Clientes">Clientes</a></li>
            <li><a href="produto.php" class="meumenu" title="Produtos">Produtos</a></li>
            <li><a href="#" class="meumenu" title="Vendas">Vendas</a></li>
        </ul>
    </div>
    <h1>Cadastro</h1>
    <div class="formulario">
            <form action="insertionc.php" method="POST" name="formulario" onsubmit="return validarDadosCadastro()">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" >
                <p class="erro-input" id="erro-nome"></p>

                <label for="email">E-mail: </label>
                <input type="text" name="email" id="email" >
                <p class="erro-input" id="erro-email"></p>

                <label for="cargo">Cargo:</label>
                <select class="select">
                    <option value="Administrador">Administrador</option>
                    <option value="CEO" selected>CEO</option>
                    <option value="Chefe">Chefe</option>
                </select>
                <p class="erro-input" id="erro-cargo"></p>

                <label for="senha">Senha:</label>
                <input type="text" name="senha" id="senha" >
                <p class="erro-input" id="erro-senha"></p>
                
                <input type="submit">
            </form>
        </div>
</body>
<script src="./assets/js/script.js"></script>
</html>