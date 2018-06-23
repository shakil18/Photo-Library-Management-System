<?php
	session_start();
	$id = $_SESSION['name'];
	unset($_SESSION['loggedin']);
	session_destroy();
	header("Location:home.php");
?>