<?php
include_once 'header.php'; ?>
<br>
<br>
<div class="col-md-4 col-md-offset-4 admin_signup">
	<form role="form" method="post" action="admin_login.php">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Username</label>
	    <input type="username" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username" required>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
	  </div>
	  <button type="submit" name="submit" class="btn btn-default">Submit</button>
	</form>
</div>
<!-- jQuery -->
	<script src="//code.jquery.com/jquery.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
	<script src="./script/script.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	</body>
</html>
