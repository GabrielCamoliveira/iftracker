<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - IFTracker</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	
	<div id="login-container">
		<img id="logo" src="img\IFTracker.png" alt="Logo IFTracker" width=200 height=72>
		<!-- Email e senha -->
		<form target="_blank" action="" method="post">
			<label for="email">E-mail</label>
			<input type="email" name="email" required="required"
			id="email" placeholder="Digite seu email" autocomplete="off">

			<label for="senha">Senha</label>
			<input type="password" name="senha" required="required"
			id="senha" placeholder="Digite sua senha">
			<a href="esqueci-senha/index.php" id="esqueci-senha">Esqueci minha senha</a>

			<!--<input type="submit" value="login">-->
				<input onclick="window.location.href = 'pagina-inicial/listas-de-frequencia.php';" type="submit" value="login" />

		</form>
		<!-- Registrar -->
		<div id="registrar-container">
			<p>Ainda não tem uma conta?</p>
			<a href="cadastro.php" id="registrar">Registrar</a>
		</div>
	</div>

</body>
</php>