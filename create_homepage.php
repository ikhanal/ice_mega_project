<?php
include 'header.php';
?>
    <nav class="navbar navbar-inverse nav_bar" role="navigation">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Our Place</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="create_homepage.php">Create Page</a></li>
                    <li class=""><a href="blog.php">Blog</a></li>
                    <li class=""><a href="logout.php">Sign Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-offset-1">

                <h4 class="create_form_heading">Fill up the details of your home page </h4>
                    <?php

                if (!empty($_SESSION['myemail'])) {
                  $userid=$_SESSION['myemail'];
                  
                }
                ?>
                <form class="form-horizontal login_form" role="form" id="create_homepage" method="post"
                      action="homepage_form_submission_backup.php">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-5 control-label">Name of the Place:</label>

                        <div class="col-sm-30">
                            <input type="text" name="placename" class="form-control" id="nameofplace" placeholder="name"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-5 control-label">Location:</label>

                        <div class="col-sm-30">
                            <input type="text" name="location" class="form-control" id="location" placeholder="locaion"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-5 control-label">Description:</label>

                        <div class="col-sm-30">
                            <textarea class="form-control" name="description" rows="3" id="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-5 control-label">Catch-phrase for location:</label>

                        <div class="col-sm-30">
                            <input type="text" name="catchphrase" class="form-control" id="location"
                                   placeholder="phrase" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-5 col-sm-30">
                            <button type="submit" name="submit" class="btn btn-info">Generate a home page!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php include 'footer.php'; ?>