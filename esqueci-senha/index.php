<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha - IFTracker</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div id="recup-container">
        <h1>Recuperar senha</h1>
        <p>Enviaremos um e-mail contendo sua senha se o E-mail digitado possuir uma conta IFTracker</p>
        <form action="email-enviado.php">
            <label for="nome">E-mail ou RG</label>
            <input type="email" name="email" required="required"
            id="nome" placeholder="Digite seu e-mail" autocomplete="off">
            <input type="submit" value="Enviar">
            <a href="../login.php" id="voltar">Voltar à tela de login</a>

        </form>

    </div>
    
</body>
</html>