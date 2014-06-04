<button class="btn btn-success btn-lg sign_in" data-toggle="modal" data-target="#signInModel">
 Edit Page
</button>

<!-- Modal -->
<div class="modal fade" id="signInModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Please, Enter the following!</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" method="post" action=" " id="">
          <div class="form-group">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Placename:</label>
                <div class="col-sm-12">
                  <input type="text" name="placename" class="form-control"  value="<?php echo $placename ?>" id="inputPassword" placeholder="Enter Your Password* <required>" readonly >
                </div>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Location</label>
              <div class="col-sm-12">
                <input type="text" name="location" class="form-control" value="<?php echo $location ?>" id="inputEmail" placeholder="Enter your Email* <required> " required >
              </div>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
              <div class="col-sm-12">
              <!-- <textarea class="form-control" rows="3" value="<?php echo $description ?>"></textarea> -->
                <input type="text" name="description" class="form-control" value="<?php echo $description ?>" id="inputPassword" placeholder="Enter Your Password* <required>" required >
              </div>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Phrase</label>
              <div class="col-sm-12">
                <input type="text" name="phrase" class="form-control"  value="<?php echo $phrase ?>" id="inputPassword" placeholder="Enter Your Password* <required>" required >
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 pull-right">
                <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php 

  if(isset($_POST['submit'])){
    $placename = $_POST['placename'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $phrase = $_POST['phrase'];
   
    // echo 'path is '.$placename;

    $name = array($location, $description, $phrase);
    // print_r($name);

    $sql = "Update create_homepage SET location = '$location', 
                                      description = '$description', 
                                      and phrase = '$phrase',
                                      where placename = '$placename'";

    $insert_data = mysql_query($sql);
    var_dump($insert_data);

    if($insert_data){
          echo '<p>Data has been successfully updated!</p>' or die(mysql_error());
        }
        else{
          echo "Could not update!";
        }


  }
?>




