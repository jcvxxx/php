<?php 


//------- DADOS TIPO BÁSICO --------------------------------

// MATS = VARIAVEL TIPO STRING
$nome = "Hcode";   // Pode usar Aspas Simples ou Dupla
$site = 'www.hcode.com.br'; // Pode usar Aspas Simples ou Dupla

// MATS = VARIAVEL TIPO NUMÉRICA
$ano = 1990;
$salario = 5500.99

// MATS BOOLEANO
$bloqueado = false;



//------- DADOS TIPO COMPOSTO --------------------------------

// MATS ARRAY

$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2] // a posição de MANGA é 2, porque o Array sempre começa com posição ZERO.


// MATS OBJETOS

$nascimento = new DateTime();  // New, indica que orientação a objeto está sendo usada.

var_dump($nascimento);




//------- DADOS TIPO ESPECIAL -------------------------

$arquivo = fopen("exemplo-03.php", "r");

var_dump($arquivo);



$nulo = NULL; // Nulo é ausência de valor

$vazio = "";  // Já tem espaço reservado na memória para aquela variável, apenas ainda não tem nada dentro dela.


?>