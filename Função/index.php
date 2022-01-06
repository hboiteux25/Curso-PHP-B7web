
 <?php

 /*Função de Soma

 function somar($n1, $n2){
  $total = $n1 + $n2;
  return $total;
 }

 $resultado = somar(10, 15);
 echo "Total: ".$resultado;

 

 //Funções Flecha (Arrow) (7.4)

 $dizimo = fn($valor) => $valor * 0.1;
 echo  $dizimo(120);


 //Funções Recursivas (Executa ela mesma)

 function dividir($numero){
  $metade = $numero / 2;
  echo $metade."<br/>";

  if (round($metade) > 0) {
    dividir($metade);
  }

 }
 dividir(100);




//Limpar o espaço do nome
$nomeSujo = '  Henrique  ';
$nomeLimpo = trim($nomeSujo);

echo "NOME SUJO:".strlen($nomeSujo)."<br/>";
echo "NOME LIMPO:".strlen($nomeLimpo)."<br/>";

//Deixa tudo no minusculo e maiusculo
$nome = "Henrique Boiteux";
echo strtolower($nome)."<br/>";
echo strtoupper($nome);

//Função de procurar
$nomeCompleto = "Henrique de Oliveira Boiteux";
$nomes = explode('', $nomeCompleto);
print_r($nomes);

*/
//Funções do Arry
$numeros = [10,20,24,91,18];
$filtrados = array_filter($numeros, function($item){
  if ($item < 30) {
    return true;
  }else {
    return false;
  }
});

print_r($filtrados)."<br/>";



$dobrados = array_map(function($item){
return $item * 2;
}, $numeros);
print_r($dobrados);
