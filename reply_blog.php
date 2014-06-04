<div class="container">
	<div class="row">
		<form role="form" method="post" action="" id="reply_form">
			  <div class="form-group">
			    <label for="exampleInputEmail1"></label>
			    	<textarea name="reply" class="form-control reply_box" rows="3" placeholder="reply writing here"></textarea>
			  </div>
			  <button type="submit" name="submit" class="btn btn-info">Submit</button>
		</form>
	</div>
</div>

<?php 

include_once 'dbconnection.php'; 

if(isset($_POST['submit'])){
	$reply = $_POST['reply'];

	$insert_data = "INSERT INTO reply
				Values ('', '', '$reply')";

			$insert_result = mysql_query($insert_data);
			if($insert_result){
				// echo 'You have successfully started a new topic of discussion!';
			}else{
				echo 'Opss!! Something went wrong!! Try again!!';
			}
	}
