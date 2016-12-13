<!DOCTYPE HTML>
<html>
<head>
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
  
  </head>
  <body>
 <?php
	session_start();
	$learntCount = $_SESSION['numOfRows'];
	$notLearntCount = 250-$learntCount;
	$learntPercentage = $learntCount*100.0/250;
	$notLearntPercentage = 100.0-$learntPercentage;
?>
    <div id="chartContainer" style="height: 300px; width: 100%;">
    </div>
	
	<script type="text/javascript">
  
  window.onload = function () {
	CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#32CD32",
                "#FF0000"
                               
                ]);  
    var chart = new CanvasJS.Chart("chartContainer",
    {
	  colorSet: "greenShades",
	  backgroundColor: "rgba(255,138,128,0.24)",
	  animationEnabled: true,
      title:{
        text: "U.S Smartphone OS Market Share, Q3 2012",
        fontFamily: "Impact",
        fontWeight: "normal"
      },

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
       {  y: <?php echo $learntCount ?>, legendText:"Learnt words <?php echo $learntPercentage ?>", indexLabel: "Learnt words <?php echo $learntCount ?>" },
       {  y: <?php echo $notLearntCount ?>, legendText:"Not Learnt yet <?php echo $notLearntPercentage ?>", indexLabel: "Not Learnt yet <?php echo $notLearntCount ?>" },
       
       ]
     }
     ]
   });

    chart.render();
  }
  </script>
	
  </body>
 </html>


