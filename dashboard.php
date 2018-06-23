<!doctype html>
<html>
<head>
	<?php
		require 'check_db.php'; //include db connector

		session_start();
		if(!$_SESSION['loggedin'])
		{
			header("location:login.html");
			exit;
		}
		$sname = $_SESSION ['name'];
		
	?>
	
	<title> My Profile </title>
</head>

<body>
	
	<p align="right">
	<?php print ($sname); ?>
	</p>
	
	<form align="right" method="post" action="logoff.php">
	<input type="submit" value="logoff"/>
	</form>
	
	<table style="width:80%" align="center" border="1">
		<tr>
			<td colspan="2" align="center"><h3>WELCOME 
		<?php
			$sql = "SELECT * FROM registered WHERE username LIKE '$sname' ";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["fullname"];
				}
			} else {
				echo "No data found";
			}
		?>
			! to your Dash Board</h3></td>
		</tr>

		<tr>
			<td align="center"><h3><a href="uploadimg.php">Upload new Image</a></h3></td>
			<td align="center"><h3><a href="uploadedimg.php">Uploaded Images</a></h3></td>

		</tr>
		<tr>
			<td  colspan="2"><p><b>Recent Upload List</b></P>
			<?php
					$sql = "SELECT * FROM registered WHERE username LIKE '$sname' ";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						$count=0;
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
								echo $row['wildlife'];
								echo $row['portrait'];
								echo $row['still'];
						}
					} else {
						echo "No data found";
					}
				?>
			</td>
		</tr>
	</table>
</body>
</html>