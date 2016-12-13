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
?>
	
	<nav>
    <div class="nav-wrapper">
      <!..menu bar..>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
	    <li><a href="home.php">Logo</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
		<li><a href="index.html">logout</a></li>
		</ul>
		
		<ul class="right hide-on-med-and-down">
		<li><p style="margin-top:1px; margin-right:50px;"  ><?php echo $username; ?></p></li>
		<li><a href="wordlist.php"><i class="material-icons">search</i></a></li>
        
        <li><a href="wordlist.php"><i class="material-icons">refresh</i></a></li>
		</ul>
    </div>
  </nav>
  
  	<div class="card-panel  cyan accent-3"><h6>Learn Most Used Words In English </h6></div>
  
  <ul>
    <a class="waves-effect waves-light btn" href="wordlist.php"> New Words</a>
	<a class="waves-effect waves-light btn" href="Lw.php">Learnt Words</a>
	<a class="waves-effect waves-light btn" href="vocabularyTest.php">Test your vocabulary</a>
	<a class="waves-effect waves-light btn" href="pr.php">Progress</a>
   </ul>
  
    
  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	<script>
	$(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
	</script>
	
	<!..add word list..>

	<ul class="collapsible" data-collapsible="accordion">
	
	
	
	<?php
$read = file_get_contents('sub.txt');
$new = "";
for ($i=0; $i < strlen($read); $i++ ){
	$char = $read[$i];
	if ($char == " " or $char == "'" or (ord($char) >= ord('a') and ord($char) <= ord('z')) or (ord($char) >= ord('A') and ord($char) <= ord('Z'))){
		if (ord($char) >= ord('A') and ord($char) <= ord('Z')){
			$char = chr(ord($char)+32);
		}
		$new = $new.$char;
	}	
}

$new = preg_replace('/\s+/', ' ', $new);
$words = explode(" ", $new);
sort($words);

$pickedWord = $words[0];
$index = 0;
$count = 0;


$counters = array_count_values($words);
asort($counters);
$counters = array_reverse($counters);
$top250wordsWithCount = array_slice($counters, 0, 300);
//print_r($top250words);
$top250words = array_keys($top250wordsWithCount);
//print_r($top250words);

?>


<div id="wl" class="collection">
	<table id="table">
	<form action="wordlist.php" method="POST">
    <?php foreach($top250words as $key=>$value): ?>
    <?php $link="https://translate.google.lk/#auto/si/"?>
	
		
		<tr>
		<td ><a href="https://translate.google.lk/#auto/si/"<?php $value;?>  class="collection-item" name="fname"><?php echo $value; ?></a></td>
		
		<td><input id= <?=$value?> type="button" class="waves-effect waves-light btn" onclick="getId(this.id)" value="Done" /></td>
		</tr>
		
      
    <?php endforeach; ?>
	</form> 
	</table>
	</div>
	

	 
</ul>
	
	
	
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
	
	<script type="text/javascript">
	
		var words = document.getElementsByClassName('collection-item');
		for(i=0;i<words.length;i++){
			words[i].href=words[i].href+words[i].innerText;
		}
		
	
	</script>
	
	<script>
		
		
		function  getId(element) {
			
			//alert(element);
			
			//var word = String(element).split(".");
			//document.getElementById("demo").innerHTML = word[1];
			var doneWord = String(element);//word[1];
			alert("word '"+doneWord+"' is saved as a Learnet word");
			
			$.post('http://localhost/materialize2.0/insert_words.php', { "doneWord" : doneWord});
			//$(this).attr("disabled", "disabled");
			
			var property = document.getElementById(element);
			property.style.color = "#333";
			
			document.getElementById(doneWord).disabled = 'disabled';
			
			
			
			
   		
		}	
								
	</script>

    </body>
  </html>