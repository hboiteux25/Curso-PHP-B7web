<?php

$idade = 40;

if ($idade < 18) {
  echo 'Menor de Idade';
} else {
  echo 'Maior de Idade';
}


//Operador Ternario e o IF de uma Linha

echo ($idade < 18) ? 'Menor de idade': 'Maior de Idade';

$personAge = 50; echo !($personAge > 10) ? "Entra" : "Não entra";


$nomeCompleto = $nome ?? 'Visitante';
echo $nomeCompleto;


//Switch

$tipo = 'texto';

switch ($tipo){
case 'foto';
    echo 'Exibindo Foto';
    break;
case 'video';
    echo 'Exibindo Vídeo';
    break;
case 'texto';
    echo 'Exibindo Texto';
    break;
}

$door = 3;

//While

//Enquanto número for menor que 10, execute o códgio. 

$numero = 0;

while ($numero <= 10) {
 echo "N: ".$numero."<br/>";
 $numero = $numero +1;
 }
