<!DOCTYPE html>
<html>

<head>
	<title>Add Student</title>
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
		$password1 = "pass@123";
		$password = md5($password1);
		$role = "user";
		$status = "Active";
		$class = $_REQUEST['class'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO student VALUES ('$name', 
			'$email','$password','$phone','','','$class','$role ','$status ','')";
		
		if(mysqli_query($db, $sql)){
			echo "<h3>Student is Added Sussessfully."
				. " Trasaction Code: 0000ED100OK</h3>"; 

			echo nl2br("\n$name\n $class\n "
				. "$phone\n $email\n password: $password1");
		} else{
			echo "ERROR:  $sql. "
				. mysqli_error($db);
		}
		
		// Close connection
		mysqli_close($db);
		?>
		<br><a href="../">Home<a>
	</center>
</body>

</html>
