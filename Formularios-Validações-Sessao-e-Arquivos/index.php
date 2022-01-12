<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
</head>
<body>

  <?php
  session_start();

  if (isset($_SESSION['aviso'])) {
        echo $_SESSION['aviso'];
        $_SESSION['aviso'] = '';;
  }

  ?>
  <form method="POST" action="receberdor.php">
    <label for="">Nome</label>
    <input type="text" name="nome">
    <label for="">Idade</label>
    <input type="text" name="idade">
    <label for="">Email</label>
    <input type="email" name="email">
    <button type="submit" value="Enviar">Enviar</button>
  </form>
</body>
</html>