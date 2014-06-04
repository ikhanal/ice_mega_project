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

    <!-- Button trigger modal -->
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-offset-1">
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Start a thread
                </button>


                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Start Blogging </h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="post" action="blog_submission.php">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Topic:</label>
                                        <input type="text" name="topic" class="form-control" id="exampleInputEmail1"
                                               placeholder="Enter topic">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Details:</label>


                                        <textarea class="form-control" rows="3" name="details"></textarea>

                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary sign_up">Post</button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                <?php
                include_once 'dbconnection.php';

                $sql = "Select * from blog";

                $result = mysql_query($sql);

                $count = mysql_num_rows($result);
                echo '<table><tr><th> S.N. &nbsp;&nbsp;&nbsp;</th> <th> Blog Title</th></tr></br>';
                $counter = 1;
                while ($row = mysql_fetch_assoc($result)) {
                echo '<tr><td>' . $counter . '</td>';
                $page_id = $row['id']; ?>
                <td><a href="<?php echo "blog_reply.php?p_id=$page_id"; ?>">
                        <?php echo $row['topic'] . '</a></td></tr><br>'; ?>
                        <?php
                        $counter++;
                        }
                        echo '</table>';
                        ?>
            </div>
        </div>
    </div>


<?php include 'footer.php' ?>