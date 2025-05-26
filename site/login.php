<html>
	<body>
		<h1>Página de autenticação</h1>
		<form method="POST" action="src/credencia.php">
			<p>Email do aluno:</p>
			<input type="text" name="email-usuario" placeholder="aluno@exemplo.com" required>
			<p>Senha:</p>
			<input type="password" name="senha-usuario" required>
			<input type="submit" value="Acessar">
		</form>
		
		<p>Ainda não cadastrado? <a href="inscricao.php">Inscreva-se aqui.</a></p>
	</body>
</html>
