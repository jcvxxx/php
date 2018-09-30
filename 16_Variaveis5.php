<?php 

// ESCOPO DE VARIÁVEL

$nome = "Glaucio";


function teste () {

global $nome;
echo $nome;

}


function teste2(){

$nome = "joão";

echo $nome. "agora no teste 2";

}


teste();

teste2();


// As CHAVES definem o escopo da variável


?>