<?php
session_start();
	if(isset($_POST['submit']))
		{
			include "dbconnection.php";
			
			$username = $_POST['username'];
			$password = $_POST['password'];

		// $name = array($username, $password);
		$sql = "Select * from admin where username ='$username'
		and password = '$password'";
		$result = mysql_query($sql);
		$count = mysql_num_rows($result);
		
		if ($count == 1) {
			$_SESSION['myusername'] = $username;
			header("Location: admin_panal.php");
		}
		else{
			echo "Wrong login! Try Again!"; ?>
			<a href="admin.php"> <button type="submit" class="btn btn-primary">Back to Admin Login!</button></a>
			<?php

		}

			

	}

?>