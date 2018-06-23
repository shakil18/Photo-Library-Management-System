<?php
	session_start();
	
	require 'check_db.php'; //include db connector
	
	$sn=$_POST["name"];
	$spass=$_POST["passcode"];

	$sql = "SELECT * FROM registered ";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    
		while($row = mysqli_fetch_assoc($result)) {
			if($row["username"] == $sn && $row["password"] == $spass){
				$_SESSION['loggedin'] = "YES";
				$_SESSION ['name'] = $sn;
				header("Location:dashboard.php");
				break;
			}
			else{
				mysqli_close($conn);
				header("Location:login.html");				
			}
			
		}
	}
	else{
		header("Location:login.html");	
	}

	mysqli_close($conn);
?>
