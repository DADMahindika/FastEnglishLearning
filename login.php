<?php


?>



<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$db = mysqli_connect('localhost','root','','fastenglishlearning')
 or die('Error connecting to MySQL server.');

$sql="SELECT * FROM login WHERE userName='$username' and password='$password'";
$result=mysqli_query($db,$sql);
$count = mysqli_num_rows($result);


$sql="SELECT result FROM login WHERE userName='$username' and password='$password'";
$result=mysqli_query($db,$sql);

$_SESSION['result'] = $result;
$_SESSION['userName'] = $username;
$_SESSION['password'] = $password;

if($count!=1){echo "Wrong Username or Password";}
else
	{
		$_SESSION[user]=$username;
		header("location:home.php");
	}

ob_end_flush();
?>

