<?php
	session_start();
	@$user = $_POST["email"];
	@$senha = $_POST["pass"];

	if ($user == "admin@admin.com" && $senha=="admin") {

		header("location: dados.php");
		$_SESSION['login'] = "true";
	}else{
		header("location: login.php");
		$_SESSION['error'] = "true";
	}
?>