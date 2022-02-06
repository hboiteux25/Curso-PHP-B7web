<?php

$array = [
  'nome' => 'Henrique',
  'idade' => 25,
  'empresa' => 'B7Web',
  'cor' => 'Azul',
  'profissao' => 'Programador'
];

$chaves = array_keys($array);
$valores = array_values($array);

?>

<table border = "1">
<tr>
  <?php foreach($chaves as $chave): ?>
    <th><?php echo $chave; ?></th>
    <?php endforeach; ?>

</tr>
<tr>
<?php foreach($valores as $valor): ?>
    <td><?php echo $valor; ?></td>
    <?php endforeach; ?>
</tr>
</table>


