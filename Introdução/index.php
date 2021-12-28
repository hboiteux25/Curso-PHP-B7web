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