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
            <?php
            include 'dbconnection.php';

            $page_id = $_GET['p_id'];

            $sql = "Select * from blog where id ='$page_id'";

            $result = mysql_query($sql);

            while ($row = mysql_fetch_assoc($result)) {

                echo '<h3><b>Topic: </b></h3><br>';
                echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $row['topic'] . '<br>';
                echo '<h3><b>Details: </b></h3><br>';
                echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $row['details'] . '<br>';

            }
            ?>


            <div class="col-md-10">
                <textarea class="form-control" rows="5"></textarea>
                <button type="submit" name="submit" class="btn btn-primary sign_in">Reply to post</button>
            </div>

        </div>
    </div>
</div>
<?php include 'footer.php' ?>
