<?php


include 'init.php';
include 'home(header).php';
$server="localhost";
$user="root";
$pass="";
$dbname="data";


if (isset($_POST['upload'])) { 
  
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "image/".$filename; 
          
         $con=mysqli_connect($server,$user,$pass,$dbname);
  
        // Get all the submitted data from the form 
        $sql = "INSERT INTO image (filename) VALUES ('$filename')"; 
  
        // Execute query 
        mysqli_query($con, $sql); 
          
        // Now let's move the uploaded image into the folder: image 
        if (move_uploaded_file($tempname, $folder)) 
         { 
            $msg = "Image uploaded successfully"; 
        }
        else{ 
            $msg = "Failed to upload image"; 
      } 
  
  $result = mysqli_query($con, "SELECT * FROM image"); 




$imageDirectory = "image/";
 
if(is_dir($imageDirectory))
{
  $opendirectory = opendir($imageDirectory);
  
    while (($image = readdir($opendirectory)) !== false)
  {
    if(($image == '.') || ($image == '..'))
    {
      continue;
    }
    
    $imgFileType = pathinfo($image,PATHINFO_EXTENSION);
    
    if(($imgFileType == 'jpg') || ($imgFileType == 'png') || ($imgFileType== 'jfif') || ($imgFileType== 'jpeg'))
    {
      
      echo "<img src='images/".$image."' width='200'> ";
    }
    }
  
    closedir($opendirectory);
 }


}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="home.css">
	<title></title>
</head>
<body>
  <h2><a href="order.php">click here to order product</a></h2>

</body>
</html>