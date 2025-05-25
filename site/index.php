<?php
	session_start();
	
	if (!isset($_SESSION['usuario_autenticado'])) {
		header("Location: login.php");
	}
?>
<html>
	<head>
	</head>

	<body>
		<h1>Olá! Você está autenticado.</h1>
	</body>

</html>
