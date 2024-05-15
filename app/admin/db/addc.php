<!DOCTYPE html>
<html>

<head>
	<title>Add class</title>
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

		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO class VALUES ('$name', 
			'','','')";
		
		if(mysqli_query($db, $sql)){
			echo "<h3>Class is Added Sussessfully."
				. " Trasaction Code: 0000CL100OK</h3>"; 

			echo nl2br("\n$name\n ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($db);
		}
		
		// Close connection
		mysqli_close($db);
		?><a href="../">Home<a>
	</center>
</body>

</html>
