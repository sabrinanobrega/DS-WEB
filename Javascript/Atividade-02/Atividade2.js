// Questão 1
function saudar() {
    var mensagem = document.getElementById("nome").value;
    document.getElementById("mensagem").innerHTML = "Seja bem-vindo, " + mensagem;
}

// Questão 2
function verificarNumero() {
    var valor = document.getElementById("numero").value; // Pega o valor do input
    var numero = parseInt(valor); // Converte para número inteiro

    if (isNaN(numero)) { // Verifica se não é um número
        document.getElementById("resultado").innerHTML = "Por favor, insira um número válido.";
        return;
    }

    var resultado = numero % 2 === 0 ? "Par" : "Ímpar"; // Verifica se é par ou ímpar
    document.getElementById("resultado").innerHTML = numero + " é " + resultado; // Exibe o resultado
}

//questão 3

function verificandoString() {
    var Palavra = document.getElementById("String1").value;
    var String1 = Palavra.toUpperCase();
    document.getElementById("Palavra").innerHTML =  String1 ;

}

//questão 4

function verificarNumero2() {
    var valor2 = document.getElementById("numero2").value; // Pega o valor do número
    var valorPorcentagem = document.getElementById("porcentagem").value; // Pega o valor da porcentagem

    var numero2 = parseFloat(valor2); // Converte para número decimal
    var porcentagem = parseFloat(valorPorcentagem); // Converte para número decimal
    
    if (isNaN(numero2)) { // Verifica se não é um número
        document.getElementById("porcentagem").innerHTML = "Por favor, insira um número válido.";
        return;
    }
    
    var resultado2 = (numero2 * porcentagem / 100); // Calcula a porcentagem
            document.getElementById("resultado2").innerHTML = 
            numero2 + " acrescido de " + porcentagem + "% é " + (numero2 + resultado2);
        }
 
//questão 5

const cores = ["#ffbc02", "#00ff15"];
let controle = true;

trocaCor.addEventListener('click', () => {
  cor.style.backgroundColor = cores[1];  // segundo valor do array
  controle = !controle;   // nega o valor - se verdadeiro vira falso e vice e versa
 
  if(controle) cor.style.backgroundColor = cores[0];  // se true, primeira cor
  else cor.style.backgroundColor = cores[1];
})

//questão 6

function verificarIdade() {
    var idade = document.getElementById("idade").value;
    if (idade < 18) {
       greeting="menor de idade";
    } else {
        greeting="maior de idade";
    }
    document.getElementById("resultado3").innerHTML = greeting;
}

//questã0 7

function verificarNumero3() {
    var numero4 = document.getElementById("numero4").value;
    if (numero4 < 0) {
        document.getElementById("resultado3").innerText = "O numero é negativo";
    } else {
        document.getElementById("resultado3").innerText = "O numero é positivo";
    }
}

//questão 8

function validarLogin() {
    var nome2 = document.getElementById("nome2").value;
    var pass = document.getElementById("pass").value;
    if (nome2 === "admin" && pass === "12345") {
        document.getElementById("resultado5").innerText = "Login bem-sucedido!";
    } else {
        document.getElementById("resultado5").innerText = "erro login ou senha errado";
    }
}

//questão 9
function calculadora() {
    var operação1 = parseFloat(document.getElementById("operacao1").value);
    var operação2 = parseFloat(document.getElementById("operacao2").value);
    var operação = document.getElementById("operacao").value;
    var resultado4;
    console.log(operação1, operação2)
    switch (operação) {
      case "+":
        resultado4 = operação1 + operação2;
        break;
      case "-":
        resultado4 = operação1 - operação2;
        break;
      case "*":
        resultado4 = operação1 * operação2;
        break;
      case "/":
        if (operação2 !== 0) {
          resultado4 = operação1 / operação2;
        } else {
          resultado4 = "Erro: divisão por zero.";
        }
        break;
      default:
        resultado4 = "Operação inválida.";
    }

    document.getElementById("resultado4").innerText = "Resultado: " + resultado4;
  }

  //questao 10
  function valor1(){
    var mensagem = Number(window.document.getElementById("valorizando").value);
    console.log(mensagem);
    var numero= Number.parseInt(mensagem);
    var resultado = mensagem % 2 == 0 ? 'Par' : 'Impar';
    document.getElementById("mensagem3").innerHTML =  resultado;
  }
  
  


  //questao 11
  function maiorNumero() {
    var numero01 = document.getElementById("numero01").value;
    var numero02 = document.getElementById("numero02").value;
    var numero03 = document.getElementById("numero03").value;
    var resultado01 = document.getElementById("resultado01").value;
   
    if (numero01 < numero02){
      resultado01 = "o segundo numero é o maior"
    }
   
  else {
    resultado01="o primeiro numero é o maior"
  
  }
  if (numero01 < numero03){
    resultado01 = "o terceiro numero é o maior"
  }
  
  else {
  resultado01="o primeiro numero é o maior"
  
  }
  if (numero02 < numero03){
    resultado01 = "o terceiro numero é o maior"
  }
  
  else {
  resultado01="o segundo numero é o maior"
  
  }
  
  document.getElementById("resultado01").innerText = "Resultado: " + resultado01;
  
  }
  
  

  //questao 12
  function verificarTriangulo(){
    var lado1 = Number(window.document.getElementById("lado1").value);
   
    var lado2= Number(window.document.getElementById("lado2").value);
  
    var lado3= Number(window.document.getElementById("lado3").value);
  
    var resultado = document.getElementById("resultado50");
  
  
  
    if (lado1 + lado2 > lado3 && lado1 + lado3 > lado2 && lado2 + lado3 > lado1) {
        if (lado1 === lado2 && lado2 === lado3) {
            resultado = "É um triângulo equilátero (todos os lados iguais).";
        } else if (lado1 === lado2 || lado1 === lado3 || lado2 === lado3) {
            resultado = "É um triângulo isósceles (dois lados iguais).";
        } else {
            resultado = "É um triângulo escaleno (todos os lados diferentes).";
        }
    } else {
        resultado.textContent = "Os lados fornecidos não formam um triângulo válido.";
        resultado.style.color = "red";
    }
    document.getElementById("resultado50").innerHTML = resultado;
  }
  

  //questao 13

  var a = window.document.getElementById('area')

a.addEventListener('mouseenter', entrar)
a.addEventListener('mouseout', sair)

function entrar(){
a.innerText = 'entrou!'
a.style.background = 'red'
a.style.width='200px'
}

function sair(){

a.innerText = 'Saiu!'
a.style.background = 'blue'
a.style.width='300px'
}

//questao 14



//questao 15
document.addEventListener("DOMContentLoaded", DIV);
 
  function DIV(){

  var div = document.createElement("div")
  div.style.width = "1500px";
  div.style.height = "500px";
  div.style.backgroundColor = "pink";
  div.style.color = "green";
  div.style.display = "center";
  div.innerText = "Seja bem-vindo!!!";

  document.body.appendChild(div);
 
  }
