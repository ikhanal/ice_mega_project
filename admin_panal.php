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
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-offset-1">
                <?php

                if (!empty($_SESSION['myusername'])) {
                    echo "<h3> Welcome&nbsp&nbsp&nbsp" . strtoupper($_SESSION['myusername']) . "&nbsp&nbsp</h3><div class=" . "clear" . "></div>"; ?>

                <?php
                }
                ?>

                <?php
                include_once 'dbconnection.php';


                $sql = "Select * from create_homepage";

                $result = mysql_query($sql);

                $count = mysql_num_rows($result);

                echo '<table><tr><th> S.N. &nbsp;&nbsp;&nbsp;</th> <th> Page Name </th>&nbsp;&nbsp;&nbsp;<th> Action </th></tr></br>';
                $counter = 1;
                while ($row = mysql_fetch_assoc($result)) {
                    echo '<tr><td>' . $counter . '</td>';
                    // echo '<td>' . $row['id'] . '</td>';
                    $page_id = $row['id'];
                    $webAddress = $row['webAddress'];

                    ?>

                    <td><a href="<?php echo $webAddress; ?>">
                            <?php echo $row['placename']; ?> </a></td>

                    <td><a href="<?php echo "admin_remove_page.php?p_id=$page_id&remove" ?>">
                            <button type="button" class="icon-remove-sign"><img src="img/cancel.png"></button>
                        </a></td>
                    <td><a href="<?php echo "homepageEdit.php?p_id=$page_id&remove" ?>">
                            <button type="submit" name="submit" class="btn btn-info">Edit</button>
                        </a></td>
                    </tr><br>
                    <?php
                    $counter++;
                }

                ?>
                </table>

            </div>
        </div>
    </div>
<?php include 'footer.php' ?>