
<?php
include_once 'header.php';
?>
<div class="container">
    <div class="row">
        <!--<nav class="navbar navbar-default navbar-fixed-top">
            <ul class="nav navbar-nav">-->
        <p class="welcome_breadcrumb_banner">
            <a href="home.php">Home</a>
            <a href="create_homepage.php">Create Page</a>
            <a href="blog.php">Blog</a>
            <a href="logout.php">Sign Out</a>
        </p>


    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-offset-1">
            <?php
            include_once 'dbconnection.php';

            if (!empty($_SESSION['myemail'])) {
                $userid = $_SESSION['myemail'];
            }
            $sql = "Select * from create_homepage where userid='$userid'";

            $result = mysql_query($sql);

            echo '<table><tr><th> S.N. &nbsp;&nbsp;&nbsp;</th> <th> Page Name </th>&nbsp;&nbsp;&nbsp;<th> Action </th></tr></br>';
            $counter = 1;
            if ($result) {

                while ($row = mysql_fetch_assoc($result)) {
                    echo '<tr><td>' . $counter . '</td>';
                    // echo '<td>' . $row['id'] . '</td>';
                    $page_id = $row['id'];
                    $webAddress = $row['webAddress'];
                    ?>

                    <td><a href="<?php echo $webAddress; ?>">
                            <?php echo $row['placename']; ?> </a></td>


                    <td><a href="<?php echo "homepageEdit.php?p_id=$page_id&remove" ?>">
                            <button type="submit" name="submit" class="btn btn-info">Edit</button>
                        </a></td>
                    </tr><br>
                    <?php
                    $counter++;
                }
            } else {
                echo 'Oops can not retrieve rows from database!!';
            }
            ?>
        </div>

    </div>
    
</div>

