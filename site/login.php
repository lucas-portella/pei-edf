<html>
	<body>
		<?php if(isset($_GET["erroAut"])) { echo '<script src="scripts/credencial-incorreta.js"></script>'; } ?>
		<h1>Página de autenticação</h1>
		<form method="POST" action="src/credencia.php">
			<p>Email do aluno:</p>
			<input type="text" name="email-usuario" placeholder="aluno@exemplo.com" required>
			<p>Senha:</p>
			<input type="password" name="senha-usuario" required>
			<input type="submit" value="Acessar">
		</form>
		
		<p>Ainda não cadastrado? <a href="inscricao.php">Inscreva-se aqui.</a></p>
		<p>Você é professor? <a href="login-professor.php">Acesse a área do professor.</a></p>
	</body>
</html>
