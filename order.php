<?php 

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
$pname=$_POST['pname'];
$add=$_POST['add'];
$cn=$_POST['cn'];




$n="INSERT into ordering (FirstName,LastName,ProductName,Address,Contactno) VALUES ('".$fname."','".$lname."','".$pname."','".$add."','".$cn."')";


$result=mysqli_query($con,$n);

    if($result)
  {
        echo "<script>alert('order done')</script>";
  }
  

    

    else
    {
  echo "failed";
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
<body style="background-color: ">

 <center>
<form action="order.php" method="POST">
  <center>
       
  
    <div class="for">
      <table>

        
      <tr>
      <td>FirstName:<br><br></td>
      <td><input type="text" name="fname" valuse="fname" placeholder="Enter your first name" required=""><br><br></td>
    </tr>

    <tr>
      <td>LastName:<br><br></td>
      <td><input type="text" name="lname" valuse="lname" placeholder="Enter your last name" required=""><br><br></td>
    </tr>

    <tr>
      <td>ProductName:<br><br></td>
      <td><input type="text" name="pname" valuse="pname" placeholder="Enter product name which you want to order" required=""><br><br></td>
    </tr>

      <tr>
     <td> Address:<br><br></td>
      <td><input type="text" name="add" valuse="add" placeholder="Enter your name" required=""><br><br></td>
    </tr>


      <tr>
      <td>Contactno:<br><br></td>
      <td><input type="digit" name="cn" valuse="cn" placeholder="Enter your name" required=""><br><br></td>
    </tr>

      

      
  
 
       <tr>
        
        <td><input type="submit" name="button" value="submit"><br><br></td>
      </tr>
      

        
        </div>
      </table>
    </center>
    
   
</form>


</center>
</body>
</html>



