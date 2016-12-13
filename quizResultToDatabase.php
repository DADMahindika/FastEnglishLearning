<?php
session_start();
$count = $_POST['count'];

$username = $_SESSION['userName'];
$password = $_SESSION['password'];
$_SESSION['count'] = $count;


$db = mysqli_connect('localhost','root','','fastenglishlearning')
	or die('Error connecting to MySQL server.');
	
$sql="SELECT * FROM quizresults WHERE uName='$username' and password='$password'";

//$sql = "select count(id) from quizresults where uName='$username' and password='$password'";
$result=mysqli_query($db,$sql);

$rowCount = mysqli_num_rows($result);

//$sql = "INSERT INTO quizresults(uName,password,result) VALUES ('$username','$password','$count')";
//$result = mysqli_query($db,$sql);
 

	
$sql = "UPDATE login SET result='$count'  WHERE userName='$username' AND password='$password'";
$result = mysqli_query($db,$sql);


?>

