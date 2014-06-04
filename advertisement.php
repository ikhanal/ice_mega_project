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
                <a class="navbar-brand" href="admin_panal.php">Our Place</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="admin_panal.php">Home</a></li>
                    <li class=""><a href="advertisement.php">Manage Advertisement</a></li>
                    <li class=""><a href="logout.php">Sign Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Button trigger modal -->

<div class="container">
    <div class="row">
    <div class="col-md-10 col-sm-offset-1">
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Add Advertisement
        </button><br/>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Advertisement Details:</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="post" action="advertisement_publish.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Page : </label>
                                <select id="pageList" name="pageList" size="1" placeholder="Select page">
                                    <?php include_once("comboHomePage.php"); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Advertisement Title:</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       placeholder="Enter title">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">Advertisement Details:</label>
                                <textarea class="form-control" rows="3" name="details"></textarea>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Advertisement Contact:</label>
                                <input type="text" name="contact" class="form-control" id="contact"
                                       placeholder="Enter contact">

                            </div>
                            <button type="submit" name="submit" class="btn btn-primary sign_up">Publish</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>


        <?php
        include_once 'dbconnection.php';

        $sql = "Select * from advertisement";

        $result = mysql_query($sql);

        echo '<table cellpadding="5" cellspacing="5"><tr>';
        echo '<td><b>S.N.</b></td>';
        echo '<td><b> Place Name</b></td>';
        echo '<td><b> Adv Title</b></td>';
        echo '<td><b> Adv Content</b></td>';
        echo '<td><b> Adv Contact</b></td> </tr><br/>';
        $counter = 1;
        while ($row = mysql_fetch_assoc($result)) {

            echo '<tr>';
            echo '<td>' . $counter . '</td>';
            echo '<td>' . $row['place_name'] . '</td>';
            echo '<td>' . $row['ad_title'] . '</td>';
            echo '<td>' . $row['ad_content'] . '</td>';
            echo '<td>' . $row['ad_contact'] . '</td>';
            echo '</tr></br>';

            $counter++;
        }
        echo'</table>';
        ?>
    </div>
    </div>
</div>
<?php include 'footer.php' ?>