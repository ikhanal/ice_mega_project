<?php

if (isset($_POST['submit'])) {

    include 'dbconnection.php';

    $name = $_POST['yourname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $insert_data = "INSERT INTO registration
				Values ('', '$name', '$email', '$password')";

    $insert_result = mysql_query($insert_data);
    if ($insert_data) {
       echo '<div class="alert alert-success">
    Test page
    </div>';
        header('Location: index.php');
    } else {
        echo 'could not insert data';
    }
}
