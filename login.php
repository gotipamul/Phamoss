
<?php

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

	$qr="select * from doctor where Username='' '".$user."'";
	$result=mysqli_query($con,$qr);
	if(mysqli_num_rows($result)>0)
	{
		$_SESSION['user']=$un ;
		$_SESSION['pa']=$pass;
		{
			header("location:medicine.php");
			
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
	</head>
<body>

<form action="login.php" method="POST">
	<center>
	
		<div class="for">
		
    	    UserName:<br>
			<input type="text" name="un" placeholder="Enter username" required=""><br>

			Password:<br>
			<input type="password" name="pass"  placeholder="Enter password" required=""><br><br>
			<input type="submit" name="login" value="login">
    		</div>











	</body>
</html>