<!DOCTYPE html>
<html>

<head>
	<title>Password Change</title>
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

		$id = $_GET['id'];
		$type = $_GET['type'];
		$password = 'pass@123';
		$name = md5($password);


		if($type='st'){
			$sql = "UPDATE student SET password='$name' WHERE id='$id'";
		
			if(mysqli_query($db, $sql)){
				echo "<h3>Password is reset Sussessfully."
					. " Trasaction Code: 00PAS0ST100OK</h3>"; 
	
				echo nl2br("New Password is \n$password\n ");
			} else{
				echo "ERROR: Hush! Sorry $sql. "
					. mysqli_error($db);
			}
			
			// Close connection
			mysqli_close($db);
		}
		elseif($type='ad'){
			$sql = "UPDATE admin SET pass='$name' WHERE id='$id'";
		
			if(mysqli_query($db, $sql)){
				echo "<h3>Password is reset Sussessfully."
					. " Trasaction Code: 00PAS0ST100OK</h3>"; 
	
				echo nl2br("New Password is \n$password\n ");
			} else{
				echo "ERROR: Hush! Sorry $sql. "
					. mysqli_error($db);
			}
			
			// Close connection
			mysqli_close($db);
		}
		elseif($type='co'){
			$sql = "UPDATE counseler SET pass='$name' WHERE id='$id'";
		
			if(mysqli_query($db, $sql)){
				echo "<h3>Password is reset Sussessfully."
					. " Trasaction Code: 00PAS0ST100OK</h3>"; 
	
				echo nl2br("New Password is \n$password\n ");
			} else{
				echo "ERROR: Hush! Sorry $sql. "
					. mysqli_error($db);
			}
			
			// Close connection
			mysqli_close($db);
		}
		else{
		echo "SOMETHING WENT WRONG";
		}
		
		
		// Performing insert query execution
		// here our table name is college

		?><a href="../">Home<a>
	</center>
</body>

</html>
