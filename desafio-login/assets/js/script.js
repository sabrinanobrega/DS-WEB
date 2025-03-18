//Função para validação dos dados do Cliente
function validarDadosCliente(){

    if(formulario.nome.value.length < 3 || formulario.nome.value == ""){
        formulario.nome.focus();
        document.getElementById('erro-nome').innerHTML = "Verifique se o nome possui mais do que 2 caracteres";
        document.getElementById('erro-email').innerHTML = "";
        document.getElementById('erro-observacao').innerHTML = "";
        return false;
    }

    
    if(formulario.email.value == "" || 
        formulario.email.value.indexOf('@')==-1 || 
        formulario.email.value.indexOf('.')==-1){
        formulario.email.focus();
        document.getElementById('erro-nome').innerHTML = "";
        document.getElementById('erro-email').innerHTML = "Preencha o campo email corretamente!";
        document.getElementById('erro-observacao').innerHTML = "";
        return false;

    }

    if(formulario.observacao.value.length > 1000){
        formulario.observacao.focus();
        document.getElementById('erro-nome').innerHTML = "";
        document.getElementById('erro-email').innerHTML = "";
        document.getElementById('erro-observacao').innerHTML = "Excedeu a capacidade de caracteres<br> No momento possui"+formulario.observacao.value.length;
        return false;
    }

}
function validarDadosProduto(){

    if(formulariop.codp.value.length < 3 || formulariop.codp.value == ""){
        formulariop.codp.focus();
        document.getElementById('erro-codp').innerHTML = "Digite mais de 3 caracteres";
        document.getElementById('erro-nomep').innerHTML = "";
        document.getElementById('erro-estoque').innerHTML = "";
        document.getElementById('erro-preco').innerHTML = "";
        return false;
    }

    if(formulariop.nomep.value.length < 2 || formulariop.nomep.value == ""){
        formulariop.nomep.focus();
        document.getElementById('erro-codp').innerHTML = "";
        document.getElementById('erro-nomep').innerHTML = "Verifique se o nome possui mais do que 2 caracteres";
        document.getElementById('erro-estoque').innerHTML = "";
        document.getElementById('erro-preco').innerHTML = "";
        return false;
    }

    if(formulariop.estoque.value > 0 || formulariop.estoque.value == ""  ){
        formulariop.estoque.focus();
        document.getElementById('erro-codp').innerHTML = "";
        document.getElementById('erro-nomep').innerHTML = "";
        document.getElementById('erro-estoque').innerHTML = "Digite no minimo 1, exceto 0";
        document.getElementById('erro-preco').innerHTML = "";
        return false;
    }

    if(formulariop.preco.value <= 0 || formulariop.preco.value == ""){
        formulariop.preco.focus();
        document.getElementById('erro-codp').innerHTML = "";
        document.getElementById('erro-nomep').innerHTML = "";
        document.getElementById('erro-estoque').innerHTML = "";
        document.getElementById('erro-preco').innerHTML = "Digite um preço corretamente";
        return false;
    }
}