<?php
if(isset($_POST['submit'])){

    include 'dbconnection.php';

    $page_name = $_POST['pageList'];
    $ad_title = $_POST['title'];
    $ad_details = $_POST['details'];
    $ad_contact = $_POST['contact'];


    $insert_data = "INSERT INTO advertisement
				Values ('', '$page_name', '$ad_title','$ad_details','$ad_contact')";
    
    
    $insert_result = mysql_query($insert_data);
   
    if($insert_result){
                $path = getcwd()."/".$page_name.".php";
    

        if(file_exists($path)){

            $handle = fopen($path, 'a') or die('cant open file');

            if($handle){

               
                fwrite($handle, '<?php include_once "standard_template.php";?>');

                $datas = array($ad_title, $ad_details, $ad_contact);
                
                foreach($datas as $data ){
                    fwrite($handle, $data);
                }
                fwrite($handle, "");
               // fwrite($handle, '<?php include_once "footer.php";
               

                fclose($handle);
            }

        }
    
        
     header('Location: '.$page_name.'.php');
   // header('Location: standard_template.php');
        //header('Location: standard_template.php?pageName='.$page_name);
    }
    else{
        echo 'could not insert data';
    }




}
?>