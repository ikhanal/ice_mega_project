<!-- database connection -->
<?php include_once 'dbconnection.php' ?>

<button class="btn btn-success btn-lg sign_in" data-toggle="modal" data-target="#signInModel">
 Sign In
</button>

<!-- Modal -->
<div class="modal fade" id="signInModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Please, Sign in!</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" method="post" action="sign_in_submission.php" id="sign_in_form">
          <div class="form-group">
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Enter your Email* <required> " required >
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Enter Your Password* <required>" required >
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 pull-right">
                <button type="submit" name="submit" class="btn btn-primary ">Sign In</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>