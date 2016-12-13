
 
 
 <?php
	
	session_start();
	$tableName = $_SESSION['userName'];
	
	// insert data to the table
	$db = mysqli_connect('localhost','root','','fastenglishlearning')
	 or die('Error connecting to MySQL server.');
	$word = $_POST['doneWord'];
	//$tableName = $_POST['tableName'];
		
	$query = "INSERT INTO $tableName(learntWords) VALUES ('$word')";
	$result = mysqli_query($db, $query) or die('Error querying database.'); 

	mysqli_close($db);
	ob_end_flush();
	header("location:wordlist.php");
?> 
  

