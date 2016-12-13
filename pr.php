 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
	  <script src="fusionchart/js/canvasjs.min.js"></script>
	  <script type="text/javascript" src="fusionchart/js/fusioncharts.js"></script>
	<script type="text/javascript" src="fusionchart/js/themes/fusioncharts.theme.ocean.js"></script>

  
    </head>

<body>
	
<?php 
	session_start(); 
	$username = $_SESSION['userName'];
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
		<li><a href="pr.php"><i class="material-icons">search</i></a></li>
        <li><a href="pr.php"><i class="material-icons">refresh</i></a></li>
		</ul>
    </div>
  </nav>
  
  <div class="card-panel  purple lighten-3"><h6>Test Your Progress!</h6></div>
  
   <ul>
    <a class="waves-effect waves-light btn" href="wordlist.php"> New Words</a>
	<a class="waves-effect waves-light btn" href="Lw.php">Learnt Words</a>
	<a class="waves-effect waves-light btn" href="vocabularyTest.php">Test your vocabulary</a>
	<a class="waves-effect waves-light btn" href="pr.php">Progress</a>
   </ul>
   
   
	
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	  
	  <div class="col s12 m7" style="margin-left:100px;margin-right:100px;">
    <h2 class="header"></h2>
    <div class="card horizontal">
      
      <div class="card-stacked red accent-1" style="margin-left:10px; margin-right:10px;">
        <div class="card-content red accent-1" >
          <p><h5>Check your progress by using following graphs.</h5></p>
        </div>
        <div class="card-action red accent-1" style=" height:450px;" >
          <div id="chartContainer" style="height: 400px; width: 100%;">
		  </div>
        </div>
      </div>
    </div>
  </div>
  
  
<?php
// get numberOfBadges from badgeCount.php

$numberOfBadges = $_SESSION['numberOfBadges'];
if (isset($_SESSION['count'])){$count = $_SESSION['count'];}
else{
	$count = $_SESSION['result'];
?>


<?php



// This is a simple example on how to draw a chart using FusionCharts and PHP.
// We have included includes/fusioncharts.php, which contains functions
// to help us easily embed the charts.
include("fusionchart/includes/fusioncharts.php");

// Create the chart - angular gauge Chart with data given in the constructor
// Syntax for the constructor - new FusionCharts("type of chart", "unique chart id", "width of chart", "height of chart", "div id to render the chart", "type of data", "actual data")
$angularChart = new FusionCharts("AngularGauge", "ex1", "100%", "200", "chart-1", "json", '{
    "chart": {
        "caption": "Acording to the Marks of the last quiz",
        "lowerlimit": "0",
        "upperlimit": "100",
        "lowerlimitdisplay": "Bad",
        "upperlimitdisplay": "Good",
        "palette": "1",
        "numbersuffix": "%",
        "tickvaluedistance": "10",
        "showvalue": "0",
        "gaugeinnerradius": "0",
        "bgcolor": "FFFFFF",
        "pivotfillcolor": "333333",
        "pivotradius": "8",
        "pivotfillmix": "333333, 333333",
        "pivotfilltype": "radial",
        "pivotfillratio": "0,100",
        "showtickvalues": "1",
        "showborder": "0"
    },
    "colorrange": {
        "color": [
            {
                "minvalue": "0",
                "maxvalue": "25",
                "code": "FD0400"
				
            },
			{
                "minvalue": "25",
                "maxvalue": "50",
                "code": "FA910B"
            },
            {
                "minvalue": "50",
                "maxvalue": "75",
                "code": "FDEE00"
            },
            {
                "minvalue": "75",
                "maxvalue": "100",
                "code": "1FC10E"
            }
        ]
    },
    "dials": {
        "dial": [
            {
                "value": '.$count.' ,
                "rearextension": "15",
                "radius": "100",
                "bgcolor": "333333",
                "bordercolor": "333333",
                "basewidth": "8"
            }
        ]
    }
}');
// Render the chart
$angularChart->render();



// Create the chart - cylinder Chart with data given in the constructor
// Syntax for the constructor - new FusionCharts("type of chart", "unique chart id", "width of chart", "height of chart", "div id to render the chart", "type of data", "actual data")
$cylinderChart = new FusionCharts("cylinder", "ex2", "100%", "200", "chart-2", "json", '{
    "chart": {
		"caption": "Number of badges you got (out of 6)",
        "manageresize": "1",
        "bgcolor": "FFFFFF",
        "bgalpha": "0",
        "showborder": "0",
        "lowerlimit": "0",
        "upperlimit": "6",
        "showtickmarks": "0",
        "showtickvalues": "0",
        "showlimits": "0",
        "numbersuffix": " ",
        "decmials": "0",
        "cylfillcolor": "2196f3",
        "basefontcolor": "000000",
        "chartleftmargin": "15",
        "chartrightmargin": "15",
        "charttopmargin": "15"
    },
    "value": '.$numberOfBadges.',
    "annotations": {
        "groups": [
            {
                "showbelow": "1",
                "items": [
                    {
                        "type": "rectangle",
                        "x": "$chartStartX+1",
                        "y": "$chartStartY+1",
                        "tox": "$chartEndX-1",
                        "toy": "$chartEndY-1",
                        "color": "FFFFFF",
                        "alpha": "100",
                        "showborder": "0",
                        "bordercolor": "CC0000",
                        "borderthickness": "2",
                        "radius": "10"
                    }
                ]
            }
        ]
    }
}');
// Render the chart

$cylinderChart->render();
?>
  
  
  
  
  
  
  <div class="col s12 m7" style="margin-left:50px;margin-right:50px;">
  <br><br>
    <h2 class="header"> Badges you got</h2>
		<div class="card horizontal">
		  <div class="container">
		  <div><h5 id = "msj"> No badges earned yet, keep Trying!</h5></div>
			<span>
			  <img id = "bg1" src="images/badge3.png" style="width:100px; height:100px;  margin-right:10px; margin-bottom:40px;">
			</span>
			<span>
				<img id = "bg2" src="images/badge4.png" style="width:100px; height:100px; margin-left:5px; margin-right:5px; margin-bottom:40px;" >
			</span>
			<span>
				<img id = "bg3" src="images/badge5.png" style="width:100px; height:100px; margin-left:5px; margin-right:5px; margin-bottom:40px;">
			</span>
			<span>
			  <img id = "bg4" src="images/badge6.png" style="width:100px; height:100px; margin-left:5px; margin-right:5px; margin-bottom:40px;">
			</span>
			<span>
				<img id = "bg5" src="images/badge7.png" style="width:100px; height:100px; margin-left:5px; margin-right:5px; margin-bottom:40px;" >
			</span>
			<span>
				<img id = "bg6" src="images/badge8.png" style="width:150px; height:150px; margin-left:5px; ">
			</span>
		  </div>
	    </div>
   </div>	
   
   
   <!-- graphs -->
   <div class="container">
   <table>
   <tr>
   <td style = "width:500px;">
		<h5> Your Quiz Progress</h5>
	   
	   <div  id="chart-1"></div>
	   </td >
	   <td style = "width:500px; height:400px;">
	   <h5>Your Badge Progress</h5>
		<div  id="chart-2"></div>	
		</td>	
	</tr>
	</table>
	</div>  
	  
	  
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

<?php
	
	$learntCount = $_SESSION['numOfRows'];
	$notLearntCount = 300-$learntCount;
	$learntPercentage = round($learntCount*100/300,1);
	$notLearntPercentage = 100.0-$learntPercentage;
	$badges = 0;
	
?>
		
		
		<script type="text/javascript">
  
  window.onload = function () {
	CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#00c853",
                "#FF6347"
                               
                ]);  
    var chart = new CanvasJS.Chart("chartContainer",
    {
	  colorSet: "greenShades",
	  backgroundColor: "#ffffff",
	  animationEnabled: true,
      
      legend:{
        verticalAlign: "bottom",
        horizontalAlign: "center"
      },
      data: [
      {
        //startAngle: 45,
       indexLabelFontSize: 20,
       indexLabelFontFamily: "Garamond",
       indexLabelFontColor: "darkgrey",
       indexLabelLineColor: "darkgrey",
       indexLabelPlacement: "outside",
       type: "doughnut",
       showInLegend: true,
       dataPoints: [
       {  y: <?php echo $learntCount ?>, legendText:"Learnt words <?php echo $learntPercentage ?>%", indexLabel: "Learnt words <?php echo $learntCount ?>" },
       {  y: <?php echo $notLearntCount ?>, legendText:"Not Learnt yet <?php echo $notLearntPercentage ?>%", indexLabel: "Not Learnt yet <?php echo $notLearntCount ?>" },
       
       ]
     }
     ]
   });

    chart.render();
  }
  </script>
  
  <script type="text/javascript">
	
		var badge1 = document.getElementById('bg1');
		var badge2 = document.getElementById('bg2');
		var badge3 = document.getElementById('bg3');
		var badge4 = document.getElementById('bg4');
		var badge5 = document.getElementById('bg5');
		var badge6 = document.getElementById('bg6');
		
		var msg = document.getElementById('msj');
		
		var numberOfBadges = <?php echo $badges+0 ?>;
		
		// to be remove
		badge1.style.visibility = 'visible';
			badge2.style.visibility = 'visible';
			badge3.style.visibility = 'visible';
			badge4.style.visibility = 'visible';
			badge5.style.visibility = 'visible';
			badge6.style.visibility = 'visible';
			msj.style.visibility = 'hidden';
			
		
		badge1.style.visibility = 'hidden';
		badge2.style.visibility = 'hidden';
		badge3.style.visibility = 'hidden';
		badge4.style.visibility = 'hidden';
		badge5.style.visibility = 'hidden';
		badge6.style.visibility = 'hidden';
		msj.style.visibility = 'visible';
		
		
		if( <?php echo $learntCount ?> < 10){
			badge1.style.visibility = 'hidden';
			badge2.style.visibility = 'hidden';
			badge3.style.visibility = 'hidden';
			badge4.style.visibility = 'hidden';
			badge5.style.visibility = 'hidden';
			badge6.style.visibility = 'hidden';
			msj.style.visibility = 'visible';
			numberOfBadges = <?php echo $badges+0 ?>;
			
		}
		else if( <?php echo $learntCount ?> < 20){
			badge1.style.visibility = 'visible';
			badge2.style.visibility = 'hidden';
			badge3.style.visibility = 'hidden';
			badge4.style.visibility = 'hidden';
			badge5.style.visibility = 'hidden';
			badge6.style.visibility = 'hidden';
			msj.style.visibility = 'hidden';
			numberOfBadges = <?php echo $badges+1 ?>;
			
		}
		
		else if( <?php echo $learntCount ?> < 50){
			badge1.style.visibility = 'visible';
			badge2.style.visibility = 'visible';
			badge3.style.visibility = 'hidden';
			badge4.style.visibility = 'hidden';
			badge5.style.visibility = 'hidden';
			badge6.style.visibility = 'hidden';
			msj.style.visibility = 'hidden';
			numberOfBadges = <?php echo $badges+2 ?>;
			
		}
		
		else if( <?php echo $learntCount ?> < 100){
			badge1.style.visibility = 'visible';
			badge2.style.visibility = 'visible';
			badge3.style.visibility = 'visible';
			badge4.style.visibility = 'hidden';
			badge5.style.visibility = 'hidden';
			badge6.style.visibility = 'hidden';
			msj.style.visibility = 'hidden';
			numberOfBadges = <?php echo $badges+3 ?>;
			
		}
		
		else if( <?php echo $learntCount ?> < 200){
			badge1.style.visibility = 'visible';
			badge2.style.visibility = 'visible';
			badge3.style.visibility = 'visible';
			badge4.style.visibility = 'visible';
			badge5.style.visibility = 'hidden';
			badge6.style.visibility = 'hidden';
			msj.style.visibility = 'hidden';
			numberOfBadges = <?php echo $badges+4 ?>;
			
		}
		
		else if( <?php echo $learntCount ?> < 300){
			badge1.style.visibility = 'visible';
			badge2.style.visibility = 'visible';
			badge3.style.visibility = 'visible';
			badge4.style.visibility = 'visible';
			badge5.style.visibility = 'visible';
			badge6.style.visibility = 'hidden';
			msj.style.visibility = 'hidden';
			numberOfBadges = <?php echo $badges+5 ?>;
			
		}
		
		else {
			badge1.style.visibility = 'visible';
			badge2.style.visibility = 'visible';
			badge3.style.visibility = 'visible';
			badge4.style.visibility = 'visible';
			badge5.style.visibility = 'visible';
			badge6.style.visibility = 'visible';
			msj.style.visibility = 'hidden';
			numberOfBadges = <?php echo $badges+6 ?>;
			
		}
		
			/*badge1.style.visibility = 'visible';
			badge2.style.visibility = 'visible';
			badge3.style.visibility = 'visible';
			badge4.style.visibility = 'visible';
			badge5.style.visibility = 'visible';
			badge6.style.visibility = 'visible';
			msj.style.visibility = 'hidden'; */
		
				
		
		// send numberOfBadges variable to page badgeCount.php
		$.post('http://localhost/materialize2.0/badgeCount.php', { "numberOfBadges" : numberOfBadges});
		
		
	
	</script>

	
	  
    </body>
  </html>
        