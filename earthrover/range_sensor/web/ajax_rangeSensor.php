<?php
//include_once 'vars.php';

$state=$_POST["state"];
//echo"range sensor status: $state <br>";

$xx=exec("sudo python /var/www/html/earthrover/range_sensor/master.py $state");

#os.system("sudo python /var/www/html/earthrover/speaker/speaker_lights.py &");

?>
