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
$add=$_POST['add'];
$quali=$_POST['quali'];
$cn=$_POST['cn'];
$gen=$_POST['gen'];
$un=$_POST['un'];
$pass=$_POST['pass'];




$n="INSERT into doctor (FirstName,LastName,Address,Qualification,Contactno,Gender,Username,Password) VALUES ('".$fname."','".$lname."','".$add."','".$quali."','".$cn."','".$gen."','".$un."','".$pass."')";


$result=mysqli_query($con,$n);

    if($result)
  {
        echo "<script>alert('Registration done')</script>";
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
<form action="medicine.php" method="POST">
  <center>
       
  
    <div class="for">
      <table>

        
      <tr>
      <td>FirstName:<br><br></td>
      <td><input type="text" name="fname" valuse="fname" placeholder="Enter your name" required=""><br><br></td>
    </tr>

    <tr>
      <td>LastName:<br><br></td>
      <td><input type="text" name="lname" valuse="lname" placeholder="Enter your name" required=""><br><br></td>
    </tr>

      <tr>
     <td> Address:<br><br></td>
      <td><input type="text" name="add" valuse="add" placeholder="Enter your name" required=""><br><br></td>
    </tr>

      <tr>
      <td>Qualification:<br><br></td>
      <td><input type="text" name="quali" valuse="quali" placeholder="Enter your name" required=""><br><br></td>
    </tr>

      <tr>
      <td>Contactno:<br><br></td>
      <td><input type="digit" name="cn" valuse="cn" placeholder="Enter your name" required=""><br><br></td>
    </tr>

      <tr>
      <td>Gender:<br><br></td>
       <td> <input type="radio" id="male"name="gen" value="male"   required=""><label for="male">male</label><br>
            <input type="radio" id="female"name="gen" value="female" required=""><label for="female">female</label><br></td>
          </tr>
      

      <tr>
      <td>UserName:<br><br></td>
      <td><input type="text" name="un" placeholder="Enter username" required=""><br><br></td>
    </tr>
       
        
    
       <tr>
        
      <td>Password:<br><br></td>
      <td><input type="password" name="pass"  placeholder="Enter password" required=""><br><br></td>
    </tr>

        

        
  
 
       <tr>
        <form action="medicine.php">
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



