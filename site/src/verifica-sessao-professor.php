<?php
	session_start();
	
	if (!isset($_SESSION['professor-autenticado'])) {
		header("Location: /login-professor.php");
		exit();
	}
?>

