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


 //For

 for($i=0;$i<10;$i++){
  echo "N: ".$i."<br/>";

 }

 //ForEach - Exlcusivo para trabalhar com Arrays
 $ingredientes = [
   'acucar',
   'farinha de trigo',
   'ovo',
   'leite',
   'fermento em po'
  ];

 foreach($ingredientes as $ingrediente){
  echo "Item: ".$ingrediente."<br/>";
 }

 // Componentes de um computador
$lista = ['Placa-mãe', 'Memória ram', 'SSD', 'HD', 'Monitor'];

foreach ($lista as $item) {
 echo $item . PHP_EOL;
}


for ($i =0;$i<20; $i++ ){
  for ($j=0; $j<=15; $j++) { 
    echo "-";
  }
  echo "<br>";
}


while ($numero <= 10) {
  echo "N: ".$numero."<br/>";
  $numero = $numero +1;
  }