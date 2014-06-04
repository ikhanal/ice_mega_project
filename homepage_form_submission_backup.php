
<?php 
include_once 'header.php';
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
            <a class="navbar-brand" href="home.php">OurPlace </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=""><a href="home.php">Home</a></li>
                <li class=""><a href="blog.php">Create Blog</a></li>
                <li class=""><a href="logout.php">Sign Out</a></li>
            </ul>

        </div>
    </div>
</nav>
<?php
   
if (!empty($_SESSION['myemail'])) {
$userid=$_SESSION['myemail'];
}
               
if(isset($_POST['submit'])){
     include 'dbconnection.php';
     
    $placename = $_POST['placename'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $phrase = $_POST['catchphrase'];
    
    $webAddress = strtolower($placename) . '.php';
     $name = array($placename, $location, $description, $phrase);
    // print_r($name);

    $sql = "INSERT INTO create_homepage
			values('','$userid', '$placename', '$location' , '$description' ,'$phrase','$webAddress')";

    $insert_result = mysql_query($sql);
   
    if($sql){

        $path = getcwd() . "/" . $webAddress;
        // echo "path is: ".$path;

        if(!file_exists($path)){

            $handle = fopen($path, 'a') or die('can not create page');
            echo $handle;
            if($handle){


               
                fwrite($handle, '<?php include_once "standard_template.php";?>');
          
            $sql = "Select * from create_homepage where placename = '$placename'";
            
            $result = mysql_query($sql);

            $count = mysql_num_rows($result);
            if($result){
            $row = mysql_fetch_assoc($result);
            $name=$row['placename'];
            
            $loc=$row['location'];
            $desc=$row['description'];
            fwrite($handle, '<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<h1 class="margin-base-vertical">My site My pride :'.$name.'</h1>

				<p>
					It is located at '.$loc.'
				</p>
                                <p>
					 '.$desc.'
				</p>
                    </div>
                    </div>
                    </div>');
            }
            
            fclose($handle);
            }

        }
        
        
    }else{
      echo'could not insert data';  
    }
    
}

?>
            

         <?php header('Location: '.$placename.'.php'); ?>       