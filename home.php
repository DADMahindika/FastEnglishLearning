<!DOCTYPE html>
  <html>
    <head>
	<!..add title..>
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
		<li><a href="index.php"><i class="material-icons">search</i></a></li>
        
        <li><a href="home.php"><i class="material-icons">refresh</i></a></li>
		</ul>
    </div>
  </nav>
  <div class="card-panel  purple lighten-2"><h4 style="color:#ffffff">Follow us to learn English Quickly!</h4></div>
  
 
	
 <ul>
    <a class="waves-effect waves-light btn" href="wordlist.php"> New Words</a>
	<a class="waves-effect waves-light btn" href="Lw.php">Learnt Words</a>
	<a class="waves-effect waves-light btn" href="testvocabulary.html">Test your vocabulary</a>
	<a class="waves-effect waves-light btn" href="pr.php">Progress</a>
   </ul>
        
  
    
	
	<div class="slider">
    <ul class="slides">
      <li>
        <img src="http://pedus.org/images/education-500.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Everyone can do it!</h3>
          <h5 class="light grey-text text-lighten-3">Learning English is simple.</h5>
		  
	
        </div>
      </li>
      <li>
        <img src="http://i.huffpost.com/gen/1310890/images/o-HIGHER-EDUCATION-facebook.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Follow us to Learn English</h3>
          <h5 class="light grey-text text-lighten-3">Self Learning is better than other methods</h5>
        </div>
      </li>
      <li>
        <img src="https://www.timeshighereducation.com/sites/default/files/styles/the_breaking_news_image_style/public/Pictures/web/l/i/f/learn-english-button-mac-keyboard.jpg?itok=a7MqcBkE"> <!-- random image -->
        <div class="caption right-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3">Stay for a while and try this.</h5>
        </div>
      </li>
      <li>
        <img src="https://education.ufl.edu/english-education/files/2016/03/english-ed-degrees-masters-1024x584.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Actually,this is real learning!</h3>
          <h5 class="light grey-text text-lighten-3">We are here to give you up.</h5>
        </div>
      </li>
    </ul>
  </div>
  
  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	<script>
	$(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
	</script>
	
	
</ul>

<!-- About Section -->
<section id="about">
	<div class="large-card">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">About Us</span>
			  <p> </p>
			  <br><br>
              <p>Welcome to fast English learning website.We are always here to help you to improve your English knowledge without having boring.This website always helps you to improve your vocabulary knowledge.Whether you are a kid,student,undergraduate,teenager or adult, you can join with us to Learn English.This is free of charge for anyone.</p>
			  <p>English is increasingly the language of choice in today’s social and business environments. English speaking and comprehension skills can help fulfil the aspirations of millions of people.Come and join with us and atleast try for once.Then you can understand our difference.</p>
			  
            </div>
            
          </div>
        </div>
      </div>
</section>            

	
	<!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	
	
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