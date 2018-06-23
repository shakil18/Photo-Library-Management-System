<?php
	session_start();
	$run2=$_SESSION ['name'];
	require 'check_db.php'; //include db connector
		
$target = "uploads/";

$target = $target.basename( $_FILES['imgi']['name']) ;

 if(move_uploaded_file($_FILES['imgi']['tmp_name'], $target)) 
 {
 $sql="UPDATE registered SET still='$target' WHERE username='$run2' ";

if ($conn->query($sql) === TRUE) {
	$_SESSION["name"]=$run2;
	header("Location: dashboard.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 } 
 else {
 echo "Sorry, there was a problem uploading your file.";
 }
?>
