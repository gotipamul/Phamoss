

<?php 
include 'init.php';
include 'home(header).php';
$server="localhost";
$user="root";
$pass="";
$dbname="data";
 // $msg = ""; 
  
  // If upload button is clicked ... 
  


?> 




<!DOCTYPE html> 
<html> 
  
<head> 
  <link rel="stylesheet" type="text/css" href="home.css">
  <style>


    #content{ 
    width: 50%; 
    margin: 20px auto; 
    border: 1px solid #cbcbcb; 
} 
form{ 
    width: 50%; 
    margin: 20px auto; 
} 
form div{ 
    margin-top: 5px; 
} 
#img_div{ 
    width: 80%; 
    padding: 5px; 
    margin: 15px auto; 
    border: 1px solid #cbcbcb; 
} 
#img_div:after{ 
    content: ""; 
    display: block; 
    clear: both; 
} 
img{ 
    float: left; 
    margin: 5px; 
    width: 300px; 
    height: 140px; 
} 
  </style>

    <title>Image Upload</title> 
  
<body> 
    <div id="content"> 
  
        <form method="POST" 
              action="im.php" 
              enctype="multipart/form-data"> 
            <input type="file" 
                   name="uploadfile" 
                   value="" /> 
  
            <div> 
              <form action="im.php">
                <button type="submit"
                        name="upload"> 
                  UPLOAD 
                </form>
                </button> 
            </div> 
        </form> 
    </div> 
</body> 
  
</html> 