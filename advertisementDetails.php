<?php
include_once 'dbconnection.php';
$sql = "Select * from advertisement";

$result = mysql_query($sql);

$count = mysql_num_rows($result);
print_r($count);
echo 'This is test in standard templage';
while($row = mysql_fetch_assoc($result)){
    echo $row['place_name'];
    echo $row['ad_title'];
}
?>
<?php
include 'dbconnection.php';

if (isset($_POST['submit'])) {
    $placename = $_POST['placename'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $phrase = $_POST['catchphrase'];

    $webAddress = strtolower($placename) . '.php';
    $name = array($placename, $location, $description, $phrase);
    $insert_data = "INSERT INTO create_homepage
				Values ('', '$placename', '$location', '$description', '$phrase','$webAddress')";

    $insert_result = mysql_query($insert_data);
    if ($insert_data) {

        $path = getcwd() . "/" . $webAddress;
        if (!file_exists($path)) {

            $handle = fopen($path, 'a')or die('Can not open file!!');

            if ($handle) {

                fwrite($handle, '<?php include_once "standard_template.php";?>');

                $datas = array($placename, $location, $description, $phrase);

                foreach ($datas as $data) {
                    fwrite($handle, $data);
                }
                fwrite($handle, "");
                fwrite($handle, '<?php include_once "footer.php";?>');

                fclose($handle);
            }
        }
    } else {
        echo 'could not insert data';
    }
}

//if (isset($_GET['pageName'])){
//    
//    $value=$_GET['pageName'];
//    echo $value;
//    $sql = "Select *from create_homepage";
//
//$result = mysql_query($sql);
//
////return $page_id = $_GET['id']; exit;
//
//while($row = mysql_fetch_assoc($result)){
//    $pageName=$row['placename'];
//    $webAddress=$row['webAddress'];
//    if($value==$pageName){
//        
//    echo'this content goes into'.$webAddress;
//}
//}
//
//    
//}
?>