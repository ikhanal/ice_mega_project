<?php
session_start();
if(isset($_POST['submit'])){

	include 'dbconnection.php';

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$name = array($name, $email, $password);
	// print_r($name);

	$sql = "Select * from registration where email ='$email'
		and password = '$password'";

		$result = mysql_result(mysql_query($sql), 0);

		if($result){
			$_SESSION['myemail'] = $email;
			
			if(!empty($_SESSION['myemail'])){
			header("Location: home.php");
			exit();
		}
			
		}
		else{
			die('Oops!! Something went wrong!!Please, make sure you have been signed up!!');
		}
}
