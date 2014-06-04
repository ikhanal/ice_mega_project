<?php
if(isset($_POST['submit'])){

    include 'dbconnection.php';

    $topic = $_POST['topic'];
    $details = $_POST['details'];


    $insert_data = "INSERT INTO blog
				Values ('', '$topic', '$details')";

    $insert_result = mysql_query($insert_data);
    if($insert_data){
        header('Location: blog.php');
    }
    else{
        echo 'could not insert data';
    }




}
