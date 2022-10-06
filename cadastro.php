<?php
use IFTracker\Entity\Usuario;
$obUsuario = new Usuario;
//VALIDAÇÃO DO POST
if(isset($_POST['rg'],$_POST['email'],$_POST['nome'],$_POST['senha'],$_POST['tipo-conta'])){

  $obUsuario->rg = $_POST['rg'];
  $obUsuario->email     = $_POST['email'];
  $obUsuario->nome    = $_POST['nome'];
  $obUsuario->senha    = $_POST['senha'];
  $obUsuario->tipo     = $_POST['tipo-conta'];
  $obUsuario->cadastrar();

  header('location: index.php?status=success');
  exit;
};
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar - IFTracker</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div id="register-container">
        <h1>Bem Vindo!</h1>
        <h4>Só precisamos de algumas informações para continuar.</h4>
        <form action="cadastro.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" required="required"
            id="nome" maxlength="200" placeholder="Nome completo" autocomplete="off">

			<label for="email">E-mail</label>
			<input type="email" name="email" required="required"
			id="email" maxlength="256" placeholder="Digite seu email" autocomplete="off">

			<label for="senha">Senha</label>
			<input type="password" name="senha" required="required"
			id="senha" maxlength="250" placeholder="Digite sua senha">

            <label for="rg">RG</label>
            <input type="text" name="rg" required="required"
            id="rg" placeholder="Digite seu RG" autocomplete="off"
            size="9" maxlength="9">

            <div id="tipos-conta">
            <label for="conta">Tipo de conta</label>
            <br />
            <input type="radio" class="radio" name="tipo1" value="estudante" checked="checked" /> Estudante
            <input type="radio" class="radio" name="tipo1" value="professor" /> Professor
            </div>

			<a href="login.php" id="tem-conta">Já tenho uma conta</a>
			<input type="submit" value="Registrar">
            



		</form>

    </div>
</body>
</html>
