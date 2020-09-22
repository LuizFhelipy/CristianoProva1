<?php

require_once('conexao.php');

$id = $_GET['id'];

if ($id != "") {
  $atendimento = date('Y/m/d H:i');
  $status = 'cancelado';
  $sql = "update atendimentos set atendimento = '$atendimento', status = '$status'
					where id = " . $id;
  $resultado = mysqli_query($conexao, $sql);
  if ($resultado) {
    $msg = "Atendimento Cancelado!";
  }
  echo "<script>window.location.href='atendimento.php?msg=$msg';</script>";
}
