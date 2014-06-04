<?php
 include 'dbconnection.php';
if(isset($_POST['submit'])){
    $placename = $_POST['placename'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $phrase = $_POST['catchphrase'];
    
    $webAddress = strtolower($placename) . '.php';
     $name = array($placename, $location, $description, $phrase);
    // print_r($name);

    $sql = "INSERT INTO create_homepage
			values('', '$placename', '$location' , '$description' ,'$phrase','$webAddress')";

    $insert_result = mysql_query($sql);
   
    if($sql){

        $path = getcwd() . "/" . $webAddress;
        // echo "path is: ".$path;

        if(!file_exists($path)){

            $handle = fopen($path, 'a') or die('can not create page');
            echo $handle;
            if($handle){


                fwrite($handle, '<?php include_once "standard_template.php";?>');

                $datas = array($placename, $location, $description, $phrase);

                foreach($datas as $data ){
                    
                    fwrite($handle, $data);
                }
               
                fwrite($handle, "");
                

                fclose($handle);
            }

        }
        
        header('Location: '.$placename.'.php');
    }else{
      echo'could not insert data';  
    }
    
}

?>