//VARIAVEIS

<?php 
$totaoDaSoma = 100; // Inteiro
echo($totaoDaSoma);
$nome = 'Henrique'; // String
echo($nome);
$dormindo = true; //Boolean
echo($dormindo);
$vazia = null; // Vazia
echo($vazia);
?>

<?php 
$nome = 'Henrique';
$sobrenome = 'Boiteux';
$nomeCompleto = "$nome $sobrenome";
echo $nomeCompleto;

?>

<?php 
$nome = 'Henrique';
$sobrenome = 'Boiteux';
$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome;

echo $nomeCompleto;

?>

//ARRAY

<?php 
$bolo1 = [
  'açucar', 
  'farinha', 
  'ovo', 
  'leite', 
  'fermento em pó'];
echo $bolo1[0];

$bolo2 = [
  ...$bolo1,
  'corante'
]
?>

<?php
$numeroDaMegaSena = [10,14,27,34,8];

echo "Número 1: ".$numeroDaMegaSena[0]."<br/>";
echo "Número 2: ".$numeroDaMegaSena[1]; 
?>