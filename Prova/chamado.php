<?php

require_once('conexao.php');

$id = $_GET['id'];

if ($id != "") {
  $atendimento = date('Y/m/d H:i');
  $status = 'atendido';
  $sql = "update atendimentos set atendimento = '$atendimento', status = '$status'
					where id = " . $id;
  $resultado = mysqli_query($conexao, $sql);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Chamado</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
  <?php include_once("index.php"); ?>
  <h1 align=center>Cliente <?php echo $id ?></h1>
  <h2 align=center>Siga para o setor de atendimentos!</h2>
  <script>
    setTimeout(function() {
      window.location.href = "atendimento.php";
    }, 10000);
  </script>
</body>

</html>