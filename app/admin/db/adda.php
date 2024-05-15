<!DOCTYPE html>
<html>

<head>
	<title>Add Admin</title>
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
		$username = $_REQUEST['username'];
		$password1 = "pass@123";
		$password = md5($password1);
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO admin VALUES ('$username', 
			'','$password','$email')";
		
		if(mysqli_query($db, $sql)){
			echo "<h3>Admin is Added Sussessfully."
				. " Trasaction Code: 0000AD100OK</h3>"; 

			echo nl2br("\n$username\n $email\n password: $password1");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($db);
		}
		
		// Close connection
		mysqli_close($db);
		?>
		<br><a href="../">Home<a>
	</center>
</body>

</html>
