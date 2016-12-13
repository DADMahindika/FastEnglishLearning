<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
<?php 
	session_start(); 
	$username = $_SESSION['userName'];
	$tableName = $_SESSION['userName'];
?>	
	
	<!menu bar>
	<nav>
    <div class="nav-wrapper">
      
     <ul id="nav-mobile" class="left hide-on-med-and-down">
	    <li><a href="home.php">Logo</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
		<li><a href="index.html">logout</a></li>
		</ul>
	  
	 <ul class="right hide-on-med-and-down">
	    <li><p style="margin-top:1px; margin-right:50px;"  ><?php echo $username; ?></p></li>
		<li><a href="Lw.html"><i class="material-icons">search</i></a></li>
        
        <li><a href="Lw.html"><i class="material-icons">refresh</i></a></li>
		</ul>
    </div>
  </nav>
  
  <div class="card-panel   blue-grey lighten-1"><h6>Learnt Words!</h6></div>
	 <ul>
    <a class="waves-effect waves-light btn" href="wordlist.php"> New Words</a>
	<a class="waves-effect waves-light btn" href="Lw.php">Learnt Words</a>
	<a class="waves-effect waves-light btn" href="vocabularyTest.php">Test your vocabulary</a>
	<a class="waves-effect waves-light btn" href="pr.php">Progress</a>
   </ul>
  
   <div class="col s12 m7">
    <h2 class="header"></h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="http://www.gr8english.com/wp-content/uploads/2009/10/vocabulary1-300x192.gif">
      </div>
      <div class="card-stacked pink lighten-2">
        <div class="card-content pink lighten-2">
          <p><h5>You can check learnt word list here.</h5></p>
        </div>
		
		
<?php  
			
			
			
			$db = mysqli_connect('localhost','root','','fastenglishlearning')
			 or die('Error connecting to MySQL server.');
			 
			$query = "SELECT learntWords FROM $tableName;";
			$result = mysqli_query($db, $query) or die('Error querying database.'); 
			$array = Array();
					
			
			while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
				
				if($row[0] != ""){
					array_push($array, $row[0]);
				}
			}
			//print_r($array);
			
			$count = sizeof($array);
			
			mysqli_close($db);
			
?>

<?php
	
	$_SESSION['numOfRows'] = $count;
?>

		
		<div>
		<ul class="collection">
	
    <?php foreach($array as $value): ?>

		
		<li  class="collection-item" name="fname" style="color:#fff; background-color:#f06292; padding-left:234px;"><a><?php echo $value ?></a></li>
		
		
		
      
    <?php endforeach; ?>
	
	</ul>
	</div>
		
		
        
      </div>
    </div>
  </div>
  
    	
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	  <!..add footer..>
	<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">FEL</h5>
                <li><a class="grey-text text-lighten-3" href="#!">Home</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Coverage</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Bug</a></li><br><br><br>
				<li><h5 class="white-text">Help</h5></li>
                
                  <li><a class="grey-text text-lighten-3" href="#!">Help Center</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Get Started</a></li>
				
				
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">About</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">About Us</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Blog</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Terms and Services</a></li><br><br>
				  <li><h5 class="white-text">Connect</h5></li>
                
                  <li><a class="grey-text text-lighten-3" href="#!">Face Book</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
				
				  
                </ul>
              </div>
			  
			 
			  
			  
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
		
		
		
    </body>
  </html>