<?php 

// ARRAYS SUPER GLOBAIS OU VARIÁVEIS PRÉ-DINIDAS

$nome = (int)$_GET["a"];   // GET é método, sendo este e o Método POST os mais usados.

/*var_dump($nome);  // Usando ECHO ao invés de var-dump, aparacerá apenas o valor.
*/



/*
// PRIMEIRO
$ip = $_SERVER ["REMOTE_ADDR"];
echo $ip;
// Captura Endereço IP (no caso aagora de localhost pata localhost)
*/



// SEGUNDO
$ip = $_SERVER ["SCRIPT_NAME"];
echo $ip;
// Uma das utilidade é montar um LOG DE ACESSO usando este rescurso (Exemplo, para saber o que os funcionários da empresa estão acessando)


/* Divindo uma URL
http://localhost/variaveis/exemplo-04.php?a=123 >>> 
>>> Até PHP é o endereço da Página (URL).
>>> ? é o símbolo que divide

// Toda informação que vir por GET ou por POST, sempre será uma STRING.

// Se precisar que esta informação vire um número (por exmeplo), deve-se fazer um CAST (uma MUDANÇA), no caso colocamos (int), antes do $_GET 

URL = Uniforme Resource Locator
URi = é um pedaço da URL (exemplo HTTP)

*/

?>