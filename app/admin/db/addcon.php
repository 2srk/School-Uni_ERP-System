<!DOCTYPE html>
<html>

<head>
	<title>Add Content</title>
</head>
<body>
	<center>Server Output
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		include "../dbcx.php";
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$ph = $_REQUEST['yid'];
		
		$cl = $_REQUEST['class'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO video VALUES ('$name', 
			'$ph','$cl','')";
		
		if(mysqli_query($db, $sql)){
			echo "<h3>Content is Added Sussessfully."
				. " Trasaction Code: 0000CN100OK</h3>"; 

			echo nl2br("\n$name\n password: pass@123");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($db);
		}
		
		// Close connection
		mysqli_close($db);
		?><br><a href="../">Home<a>
	</center>
</body>

</html>
