<?php
	session_start();

	/* credenciais do professor */
	$EMAIL="professor@univag.com";
	$SENHA="1234";

	$email_form = $_POST["email-professor"];
	$senha_form = $_POST["senha-professor"];

	if (strcmp($EMAIL, $email_form) == 0 && strcmp($SENHA,$senha_form) == 0) {
		$_SESSION["professor-autenticado"] = "Professor";	
		header("Location: /area-professor.php");
	}	
	else {
		header("Location: /login.php?erroAut=1");	
	}
?>
