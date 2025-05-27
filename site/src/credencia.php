<?php
	include 'conecta-bd.php';
	session_start();

	$email = $_POST['email-usuario'];
	$senha = $_POST['senha-usuario'];

	$sql = "SELECT Nome, Senha from Alunos WHERE Email = \"$email\"";
	
	$resultado = $conn->query($sql);

	if ($resultado->num_rows > 0) {
		$linha = $resultado->fetch_assoc();
		if ($senha === $linha['Senha']) {
				$_SESSION['usuario_autenticado'] = $linha['Nome'];
				header("Location: /index.php");
				exit();
		}
	}
	
	header("Location: /login.php?erroAut=1");	
?>
