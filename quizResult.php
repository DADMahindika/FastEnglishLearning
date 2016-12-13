<?php
//notcompleted not needed 
session_start();
//$count = $_POST['count'];

$username = $_SESSION['userName'];
$password = $_SESSION['password'];
$_SESSION['count'] = $count;


$db = mysqli_connect('localhost','root','','fastenglishlearning')
	or die('Error connecting to MySQL server.');

$sql="SELECT result FROM quizresults WHERE uName='$username' and password='$password'";

$result = mysqli_query($db,$sql);
$_SESSION['count'] = $result[0];

//header("location:pr.php");

?>