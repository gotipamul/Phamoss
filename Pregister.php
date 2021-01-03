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
$city=$_POST['city'];
$DOB=$_POST['DOB'];
$cn=$_POST['cn'];
$gen=$_POST['gen'];
$un=$_POST['un'];
$pass=$_POST['pass'];




$n="INSERT into patient (FirstName,LastName,City,DOB,Contactno,Gender,Username,Password) VALUES ('".$fname."','".$lname."','".$city."','".$DOB."','".$cn."','".$gen."','".$un."','".$pass."')";


$result=mysqli_query($con,$n);

    if($result)
  {
        echo "<script>alert('Registration sucessfully done')</script>";
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
<body>

 <center>
<form action="Pregister.php" method="POST">
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
     <td> City:<br><br></td>
      <td><input type="text" name="city" values="city" placeholder="Enter your name" required=""><br><br></td>
    </tr>

      <tr>
      <td>DOB:<br><br></td>
      <td><input type="Date" name="DOB" values="DOB" placeholder="Enter your name" ><br><br></td>
    </tr>

      <tr>
      <td>Contactno:<br><br></td>
      <td><input type="digit" name="cn" values="cn" placeholder="Enter your name" required=""><br><br></td>
    </tr>

      <tr>
      <td>Gender:<br><br></td>
       <td> <input type="radio" id="male"name="gen" value="male"   required=""><label for="male">male</label><br>
            <input type="radio" id="female"name="gen" value="female" required=""><label for="female">female</label><br></td>
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
      
        <td><input type="submit" name="button" value="submit"><br><br></td>
      
      </tr>
      

        
        </div>
      </table>
    </center>
    
   
</form>


</center>
</body>
</html>



