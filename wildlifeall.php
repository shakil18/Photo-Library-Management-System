<!doctype html>
<html>
<head>
	<?php
		require 'check_db.php'; //include db connector
	?>
	
	<title> Wild Life </title>
</head>

<body>
	<form>
	<table style="width:80%" align="center" border="1">
		<tr>
			<td colspan="5" align="center"><h2>Wild Life </h2></td>
		</tr>

		<tr>
			<td  colspan="5">
			
			<?php
					$sql = "SELECT * FROM registered";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
						echo '<img src ="'.$row["wildlife"].'"'.'alt="pic" height="150px" width="150px" align = left />';
						}
					} else {
						echo "No data found";
					}
				?>
			</td>
		</tr>
		</table>
	</form>
</body>
</html>