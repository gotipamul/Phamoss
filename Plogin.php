<?php
include 'init.php';
include 'home(header).php';
$server="localhost";
$user="root";
$pass="";
$dbname="data";

$con=mysqli_connect($server,$user,$pass,$dbname);

if(isset($_POST['login']))
{
	$user=$_POST['un'];
    $pass=$_POST['pass'];

	$qr="select * from patient where Username='' '".$user."'";
	$result=mysqli_query($con,$qr);
	if(mysqli_num_rows($result)>0)
	{
		$_SESSION['user']=$un ;
		$_SESSION['pa']=$pass;
		{
			header("location:Dsearch.php");
			
		}
		
		

		//echo "loged in";
	}

	else
	{
		echo "<script>alert('login not done')</script>";
	}
}

?>





<html>
<head>
	<link rel="stylesheet" type="text/css" href="home.css">
	<style>
		.butt
		{
			
		}
	</style>
	</head>
<body>
<center>
<form action="Plogin.php" method="POST">
	
		<div class="for">
			<table>
			<tr>
    	   <td> UserName:<br><br></td>
			<td><input type="text" name="un" placeholder="Enter username" required=""><br><br></td>
		</tr>
		<tr>

			<td>Password:<br><br></td>
			<td><input type="password" name="pass"  placeholder="Enter password" required=""><br><br></td>
		</tr>
		<tr>
			<form action="Dsearch.php">
			<td><div class="butt"><input type="submit" name="login" value="login"></div><br><br></td>
		</form>
		</tr>
    		</div>
    	</table>











	</body>
</html>