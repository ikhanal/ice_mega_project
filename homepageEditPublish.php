<?php

if (isset($_POST['submit'])) {
    include 'dbconnection.php';
    $placename = $_POST['placename'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $phrase = $_POST['catchphrase'];

    $webAddress = strtolower($placename) . '.php';


    // $webAddress = strtolower($placename) . '.php';
    $name = array($placename, $location, $description, $phrase);
    //print_r($name);

    $sql = "UPDATE create_homepage SET location='$location', description='$description', phrase='$phrase' WHERE placename='$placename'";


    $update_result = mysql_query($sql);


    if (!$update_result) {
        die('Could not update data :' . mysql_error());
    } else {
      
        if ($sql) {

            $path = getcwd() . "/" . $webAddress;
            // echo "path is: ".$path;

            if (file_exists($path)) {

                $handle = fopen($path, 'w+') or die('can not create page');
                echo $handle;
                if ($handle) {



                    fwrite($handle, '<?php include_once "standard_template.php";?>');

                    $sql = "Select * from create_homepage where placename = '$placename'";

                    $result = mysql_query($sql);

                    $count = mysql_num_rows($result);
                    if ($result) {
                        $row = mysql_fetch_assoc($result);
                        $name = $row['placename'];

                        $loc = $row['location'];
                        $desc = $row['description'];
                        fwrite($handle, '<div class="container">
                                            <div class="row">
                                                <div class="col-md-6 col-md-offset-3">

                                                    <h1 class="margin-base-vertical">My site My pride :' . $name . '</h1>

                                                    <p>
                                                    It is located at ' . $loc . '
                                                    </p>
                                                    <p>
                                                    ' . $desc . '
                                                    </p>
                                                </div>
                                             </div>
                                         </div>');
                    }

                    fclose($handle);
                }
            }
        } else {
            echo'could not update data';
        }
    }


    header('Location: ' . $placename . '.php');
}
?>
