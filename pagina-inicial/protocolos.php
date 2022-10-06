<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Protocolos - IFTracker</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="../css/tela-protocolos.css">
</head>
<body>
    <div id="barra-lateral">
		<img src="..\img\IFTracker.png" alt="IFTracker" width="180" height="65">
        <p id="versao">Ver. 1.0</p>
		<hr />
		<a href="listas-de-frequencia.php" id="botao-tela">Listas de Frequência</a>
		<a href="faltas.php" id="botao-tela">Faltas</a>
        <p id="botao-inativo">Protocolos</p>

    </div>

	<div id="tela-principal">
		<div id="conteudo-tela">
			<form action="#" id="form-protocolo">
				<ul id="tipo-protocolo">
					<li>
						<input type="radio" name="tipo-protocolo" value="atestado" checked="checked">
						<label for="atestado">Atestado Médico</label>
					</li>

					<li>
						<input type="radio" name="tipo-protocolo" value="dispensa">
						<label for="dispensa">Dispensa de Componente</label>
					</li>
				</ul>
				<ul id="componente">
					<li>
						<label for="componente">Componente</label>
						<input list="componentes" required="required">
						<datalist id="componentes">
							<option value="Programação Web">
							<option value="Português III">
							<option value="Inglês III">
							<option value="Lógica de Programação">
						</datalist>
					</li>
				</ul>

				<label for="documentos" id="documentos">Anexar Documentos</label>
				<input type="file" multiple="multiple">

			</form>
		</div>
	</div>
</body>
</html>