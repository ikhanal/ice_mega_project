<?php

	if(!empty($_SESSION['myusername'])){
		echo "Welcome&nbsp&nbsp&nbsp". $_SESSION['myusername']."&nbsp&nbsp"; 
		include_once 'header.php';
		?>
		<a href="<?php echo "admin_logout.php"?>"><button type="submit" class="btn btn-warning">Logout</button></a>
		<a href="<?php echo "admin_panal.php"?>"><button type="submit" class="btn btn-warning">Admin Panal</button></a>
		<?php
	}
	$page_id = $_GET['p_id']; 

	if(isset($_GET['remove']))
	{
		include "dbconnection.php";
  		 $sql = "delete from create_homepage where id =$page_id";

   
	   $result = mysql_query($sql);

	   if($result){

	        echo "Items successfully deleted";

	   }else{
	   	echo 'not deleted!';
	   }

	}
?>
