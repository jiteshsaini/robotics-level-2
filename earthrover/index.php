<!--
Project: Earthrover
Created by: Jitesh Saini
-->
<html>
<head>        
   <title>Control Panel</title>
   <link href="css/cp.css" rel="stylesheet" type="text/css">  
   <script src="js/jquery.min.js"></script>        
   <script src="js/cp.js"></script>        
   <script>
	
	
   </script>
</head> 
<body>
<?php

printf("<div align='center' id='box_outer'>");//------------------------
	echo"<div align='center' id='box_title'>";
		echo"<h1 style='color:#0000b3'>Earth Rover</h1>";
		
		echo"<div class='box_controls'>";
			echo"<zz>";
				echo"<label class='floatLabel'>Camera</label><br>";
				echo"<input id='cam_on' type='submit' onclick=camera('on'); value='ON'/>";
				echo"<input id='cam_off' type='submit' onclick=camera('off'); value='OFF'/>";
				echo"<br>";
				echo"<txt> .</txt>";
			echo"</zz>";
		echo"</div>";
		
		echo"<div class='box_controls'>";
			echo"<zz>";
				echo"<label class='floatLabel'>Lights</label><br>";
				echo"<input id='camlight' style='background-color:lightgray' type='submit' onclick=toggle_light('camlight'); value='OFF'/>";
				echo"<input id='headlight' style='background-color:lightgray' type='submit' onclick=toggle_light('headlight'); value='OFF'/>";
				echo"<br>";
				echo"<txt>Camera</txt>";
				echo"<txt>Front</txt>";
			echo"</zz>";
		echo"</div>";
		
		echo"<div class='box_controls'>";
			echo"<zz>";
				echo"<label class='floatLabel'>Range Sensor</label><br>";
				echo"<b id='range' style='float:right;color:blue;font-size:30px'></b>";
				echo"<input id='range_button' type='submit' onclick=toggle_rangeSensor('range_button'); value='OFF'/>";
				echo"<script src='range_sensor/web/rangesensor.js'></script>";
			echo"</zz>";
		echo"</div>";
		
	echo"</div>";
	
	//****************************************************************************
	$host=$_SERVER['SERVER_ADDR'];//192.168.1.20
	$path=rtrim(dirname($_SERVER["PHP_SELF"]), "/\\"); //earthrover

	$link_remote= 'http://'.$host.$path.'/'."remote.php";//http://192.168.1.20/earthrover/remote.php
	$link_vid= 'http://'.$host.':8000';//http://192.168.1.20:8000
	
	echo"
		<iframe src='$link_vid' id='box_video'></iframe>
		<iframe src= '$link_remote' id='box_remote'></iframe>
	";
	//****************************************************************************
	
echo"</div>";//------------------------------------------------------

?>

</body>
</html>
