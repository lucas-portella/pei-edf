<?php
	include 'conecta-bd.php';

	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	if ($conn->connect_error)
		die("Falha na conexão" . $conn->connect_error);

	$sql = "SELECT * FROM Alunos where Email = \"$email\"";
	$resultado = $conn->query($sql);

	if($resultado->um_rows > 0) {
		conn->close();
		die("Email já cadastrado.");
	}


	$sql = "INSERT INTO Alunos (Nome, Sobrenome, Email, Senha) VALUES (\"$nome\", \"$sobrenome\", \"$email\", \"$senha\")";
	$conn->close();

	if ($conn->query($sql) === TRUE) {
		session_start();
		$_SESSION['usuario_autenticado'] = $nome;
		header("Location: /index.php");
	}
	else {
		die("Falha na conexão" . $conn->error);
	}	

?>
