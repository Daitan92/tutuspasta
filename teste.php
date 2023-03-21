<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
</head>
<body>

	<h1>Formulário de Cadastro</h1>

	<form action="teste2.php" method="post">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome"><br><br>

		<label for="idade">Idade:</label>
		<input type="number" id="idade" name="idade"><br><br>

		<label for="sexo">Sexo:</label>
		<input type="radio" id="sexo_m" name="sexo" value="M">
		<label for="sexo_m">Masculino</label>
		<input type="radio" id="sexo_f" name="sexo" value="F">
		<label for="sexo_f">Feminino</label><br><br>

		<label for="formacao">Formação:</label>
		<select id="formacao" name="formacao">
			<option value="fundamental">Ensino Fundamental</option>
			<option value="medio">Ensino Médio</option>
			<option value="superior">Ensino Superior</option>
			<option value="pos">Pós-Graduação</option>
		</select><br><br>

		<label for="habilidades">Habilidades:</label><br>
		<textarea id="habilidades" name="habilidades" rows="5" cols="40"></textarea><br><br>

		<input type="submit" value="Enviar">
	</form>

</body>
</html>
