<?php
 include_once 'header.php';

include_once 'dbconnection.php';

	$sql = "Select *From start_bloggin order by topic desc";

	$insert_result = mysql_query($sql); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Trending Topic:</h3>
			</div>
<!--  -->
		</div>
	</div>
	<?php
	while($row = mysql_fetch_array($insert_result)){ ?>
		<div class="reply_form">
			<?php echo "Topic:".$row['topic'].'<br>'." "."Description:".$row['description'].'<br>'; 
			include_once 'reply_blog.php';
			?>
			
		</div>
	<hr>
	<?php
}


?>
<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-2">
			Topic of Discussion
		</div>
	</div>
	<div class="container">
		<form class="form-horizontal" role="form" method="post" action=""  id="blog_form">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Topic</label>
			    <div class="col-sm-10">
			      <input type="text" name="topic" class="form-control topic" id="inputEmail3" placeholder="topic">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
			    <div class="col-sm-10">
			      <input type="text" name="description" class="form-control description" id="inputPassword3" placeholder="description">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" name="submit" class="btn btn-success">Submit</button>
			    </div>
			  </div>
		</form>
	</div>
</div>

<?php 

if(isset($_POST['submit'])){

	$topic = $_POST['topic'];
	$description = $_POST['description'];

	$insert_data = "INSERT INTO start_bloggin
				Values ('', '$topic', '$description')";

			$insert_result = mysql_query($insert_data);
			if($insert_result){
				// echo 'You have successfully started a new topic of discussion!';
			}else{
				echo 'Opss!! Something went wrong!! Try again!!';
			}
}
include_once 'footer.php';
