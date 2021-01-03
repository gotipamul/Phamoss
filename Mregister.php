<?php 
//if(isset($_POST['submit']))
include 'init.php';
include 'home(header).php';
$server="localhost";
$user="root";
$pass="";
$dbname="data";

$con=mysqli_connect($server,$user,$pass,$dbname);



if(isset($_POST['button']))
{

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$cn=$_POST['cn'];
$un=$_POST['un'];
$pass=$_POST['pass'];


$n="INSERT into manufacture (FirstName,LastName,Contactno,Username,Password) VALUES ('".$fname."','".$lname."','".$cn."','".$un."','".$pass."')";


$result=mysqli_query($con,$n);


if($result)
  {
    //header("location:product.php");
      // echo "<script>alert(' done')</script>";
    echo "done";
   }

    

    else
    {
      
      echo "<script>alert(' not done')</script>";
    
    }

}
    

 ?>


<head>
    
    
    
    <link rel="stylesheet" type="text/css" href="home.css">
    <style>
        .butt
        {
            
             text-align: center;
             margin-left: 70px;
            
            
        }
        h2
        {
          margin-top: 20px;
        }
        

        
    </style>

  
</head>
<html>
<body>

 <center>
<form action="product.php" method="POST">
  <center>
       
  
    <div class="for">
      <table>

        
      <tr>
      <td>FirstName:<br><br></td>
      <td><input type="text" name="fname" values="fname" placeholder="Enter your name" required=""><br><br></td>
    </tr>

    <tr>
      <td>LastName:<br><br></td>
      <td><input type="text" name="lname" values="lname" placeholder="Enter your name" required=""><br><br></td>
    </tr>

      
      <tr>
      <td>Contactno:<br><br></td>
      <td><input type="digit" name="cn" values="cn" placeholder="Enter your name" required=""><br><br></td>
    </tr>

      

      <tr>
      <td>UserName:<br><br></td>
      <td><input type="text" name="un" values="un"placeholder="Enter username" required=""><br><br></td>
    </tr>
       
        
    
       <tr>
        
      <td>Password:<br><br></td>
      <td><input type="password" name="pass" values="pass" placeholder="Enter password" required=""><br><br></td>
    </tr>    
  
       
       <tr>
      <form action="product.php">
        <td><input type="submit" name="button" value="submit"><br><br></td>
      </form>
  </tr>
      

        
        </div>
      </table>
    </center>
    
   
</form>


</center>
</body>
</html>






