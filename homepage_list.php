<?php
include "dbconnection.php";

$sql = "Select *from create_homepage";

$result = mysql_query($sql);

return $page_id = $_GET['id']; exit;

while($row = mysql_fetch_assoc($result)){
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';?>
    <a href="">
     <?php  echo '<td>'.$row['placename'].'</td>'; ?> </a>
    <?php
//    echo '<td>'.$row['description'].'</td>';
//    echo '<td>'.$row['phrase'].'</td>';
    echo '</tr>';
}

?>
<a href=""><button type="button" class="btn btn-danger">Remove Item</button></a>