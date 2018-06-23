<?php
		session_start();
		unset($_SESSION['name']);
		session_destroy();
		mysqli_close($conn);
		header("Location:login.html");
?>