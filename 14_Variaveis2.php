<?php 

// $AnoNascimento = 1990; 

// $NomeCompleto = "";


// Variáveis sempre começam com $
// Colocar a primeira letra de cada palavra em maiúscula
// Variáveis NÃO podem começar com Número
// O ÚNICO caracter especial que aceita é UDERLINE
// Não pode usar nome RESERVADO do PHP

/*
Exemplo de Comentário de Bloco
AAAAAAAAAAA
BBBBBBBBBBBBBB
CCCCCCCCCCCCCCCCC
*/

$nome1 = "João";

$Sobrenome = "Rangel";


// MATS CONCATENÇÃO
$NomeCompleto = $nome1 . " " . $Sobrenome;

echo "$NomeCompleto";

// Provoca uma parada do sistema 
exit;

echo $nome1;

echo "<br/>";


unset($nome1); // (1)Comando LIMPA o valor da variável  (2)Também pode ser usado para excluir, várias variévis de uma vez Exemplo: unset ($nome1, $a, $b, $etc...)


if (isset($nome1)) {   // Usado para ecoar a variavel, SOMENTE se ela existir.
echo $nome1;	
}


?>