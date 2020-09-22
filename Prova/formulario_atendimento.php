<?php

require_once('conexao.php');

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Formulário</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
  <?php include_once("index.php"); ?>
  <div width=60% align=center>
    <form class="formulario" method="post" action="atendimento.php" align=left>
      <p> Envie uma mensagem preenchendo o formulário abaixo</p>


      <div class="field">
        <label for="nome">Nome do Cliente:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite o nome do cliente*" required>
      </div>

      <div class="field">
        <label for="telefone">Telefone do Cliente:</label>
        <input type="text" id="telefone" name="telefone" placeholder="Digite o telefone do Cliente*">
      </div>

      <div class="field">
        <label for="atividade">Atividade:</label>
        <select name="atividade">
          <option value="segunda via da conta">Segunda via de Conta</option>
          <option value="mudanca de endereco">Mudança de Endereço</option>
          <option value="suspensao do servico">Suspensão do Serviço</option>
          <option value="negociacao de debitos">Negociação de Débitos</option>
        </select>
      </div>


      <input type="submit" name="atendimento" value="Enviar">
    </form>
  </div>
</body>

</html>