<!-- ***Name: Shakil,Azizul Hakim
	 ***ID: 13-23005-1 !-->

<?php
	session_start();
	$run2=$_SESSION ['name'];
	
	require 'check_db.php'; //include db connector

	$rfname=$_POST["ifname"];
	$raddress=$_POST["iaddress"];
	$rphone=$_POST["iphone"];


	$sql = "UPDATE registered SET fullname='$rfname',address='$raddress' ,phone='$rphone' WHERE username='$run2' ";

	if ($conn->query($sql) === TRUE) {
		$_SESSION ['name'] = $run2;
			header("Location:register3.php");	
		} 
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		mysqli_close($conn);
?>

