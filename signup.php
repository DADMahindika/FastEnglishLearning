
			
<?php

session_start();
?>



<?php
$username=$_POST['uname'];
$password=$_POST['psw'];
$email=$_POST['email'];
$db = mysqli_connect('localhost','root','','fastenglishlearning')
	or die('Error connecting to MySQL server.');

$sql="INSERT INTO login(userName,password,email) VALUES ('$username','$password','$email')";

$result=mysqli_query($db,$sql);

//create table
$sql="CREATE TABLE IF NOT EXISTS `$username` (
  `Id` int(4) NOT NULL AUTO_INCREMENT,
  `learntWords` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
)";

if (mysqli_query($db, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($db);
}


header("location:index.html");

ob_end_flush();
?>

		 
			
