<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title> Testando conexão ao banco de dados </title>
</head>
<body>
  <h3>Formulário de Cadastro de Clientes</h3><br>
  <form name="Cadastro" action="<?php echo base_url('welcome/cadastrar'); ?>" method="POST">
    <label>Nome: </label>
    <input type="text" name="nome_Usuario" size="30"><br>
    <label>email_Usuario: </label>
    <input type="text" name="email_Usuario" size="45"><br>
    <label>telefone: </label>
	<input type="text" name="telefone_Usuario" size="45"><br>
	<label>senha: </label>
	<input type="text" name="senha_Usuario" size="45">
    <br>
    <input type="submit" name="enviar" value="Enviar">
  </form>
</body>
</html>