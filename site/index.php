<?php include "src/verifica-sessao.php" ?>
<html>
	<head>
	</head>

	<body>
		<?php echo "<h1>Bem-vindo, " . $_SESSION['usuario_autenticado'] ."!</h1>"; ?>
		<a href="src/deslogar.php">Deslogar</a> 
	</body>

</html>
