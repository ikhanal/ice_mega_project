<?php
include_once 'dbconnection.php';

$sql = "Select * from create_homepage";

$result = mysql_query($sql);

$count = mysql_num_rows($result);


while ($row = mysql_fetch_assoc($result)) {

    $placeName=$row['placename'];
    $page_id = $row['id'];
    //echo $placeName;
    echo "<option value = \"$placeName\">$placeName</option>";

}

?>