<html>
	<body>
		<h1>Formulário de Inscrição</h1>
		<form method="POST" action="src/cadastra-aluno.php">
			<p>Nome:</p>
			<input name="nome" type="text" maxlength="20" required>
			<p>Sobrenome:</p>
			<input name="sobrenome" type="text" maxlength="30" required>
			<p>Email:</p>
			<input name="email" type="text" maxlength="30" required>
			<p>Senha:</p>
			<input name="senha" type="text" maxlength="20" required>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
