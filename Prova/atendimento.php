<?php

require_once('conexao.php');

if (isset($_POST['nome']) && $_POST['nome'] != "") {

  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $atividade = $_POST['atividade'];
  $registro = date('Y/m/d H:i');
  $status = 'espera';

  $sql = "insert into atendimentos (nome, telefone, atividade, registro, status)
				values ('$nome', '$telefone', '$atividade', '$registro', '$status')
			";


  $resultado = mysqli_query($conexao, $sql);

  if ($resultado) {
    $_GET['msg'] = 'Atendimento Cadastrado';
    $_POST = null;
  } elseif (!$resultado) {
    $_GET['msg'] = 'Falha ao inserir Atendimento';
  }
}

if (isset($_GET['msg']) && $_GET['msg'] != "") {
  echo $_GET['msg'];
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Atendimento</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
  <?php include_once("index.php"); ?>
  <h2 align=center>Atendimentos:</h2>

  <table border=1 width=80% align=center>
    <tr>
      <td><label for="nome">Nome do Cliente:</label></td>
      <td><label for="telefone">Telefone do Cliente:</label></td>
      <td><label for="atividade">Atividade:</label></td>
      <td><label for="registro">Registro:</label></td>
      <td><label for="atendimento">Atendimento:</label></td>
      <td><label for="status">Status:</label></td>
      <td><label for="acoes">Ações</label></td>
    </tr>


    <?php
    $sql = "select id, nome, telefone, atividade, registro, atendimento, status from atendimentos ";
    $resultado = mysqli_query($conexao, $sql);

    while ($dados = mysqli_fetch_array($resultado)) {
    ?>
      <tr>
        <td> <?= $dados['nome'] ?></td>
        <td> <?= $dados['telefone'] ?> </td>
        <td> <?= $dados['atividade'] ?> </td>
        <td> <?= $dados['registro'] ?> </td>
        <td> <?= $dados['atendimento'] ?> </td>
        <td> <?= $dados['status'] ?> </td>
        <td>
          <?php if ($dados['status'] == 'espera') {
            echo  '<a href="chamado.php?id=' . $dados['id'] . '">Atender</a>
            <a href="cancelar.php?id=' . $dados['id'] . '">Cancelar</a>';
          } ?>
        </td>
      </tr>
    <?php }

    mysqli_close($conexao);

    ?>

  </table>
</body>

</html>