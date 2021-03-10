<p align="left">
Visit Website: <a href='https://helloworld.co.in' target='_blank'>
   <img src='https://github.com/jiteshsaini/earthrover1/blob/master/img/logo3.gif' height='40px'>
</a> Youtube Channel: 
<a href='https://www.youtube.com/channel/UC_2OyRNVCWCH8ipgmAoJ1mA' target='_blank'>
   <img src='https://github.com/jiteshsaini/earthrover1/blob/master/img/btn_youtube_2.png' height='40px'>
</a>
</p>

# Robotics Level 2 : Interfacing Camera, Lights, Ultrasonic Distance Sensor and Speaker with robot

Building upon the code created in <a href='https://github.com/jiteshsaini/robotics-level-1'>Robotics Level 1</a>, this repository contains code to interface the robot with additional hardware such as PiCamera, transistors (for switching 12V high brightness LEDs), Ultrasonic Distance Sensor and Speaker (for text to speech)

The code for interfacing the additional hardware is placed in the following respective folders inside 'earthrover' directory:-

- <a href='https://github.com/jiteshsaini/robotics-level-2/tree/master/earthrover/camera_lights'>camera_lights</a>
- <a href='https://github.com/jiteshsaini/robotics-level-2/tree/master/earthrover/range_sensor'>range_sensor</a>
- <a href='https://github.com/jiteshsaini/robotics-level-2/tree/master/earthrover/speaker'>speaker</a>

Further, created a Web GUI or Web Control Panel for the robot. Using this panel, user can interact with the robot and control its hardware through a browser.

Brief overview of the code present in this repository is as follows:-

<table>
 <thead>
  <tr><th>Type</th><th>Name</th><th>Description</th><th>More</th></tr>
 </thead>

 <tbody>
  
  <tr><td>folder</td><td><a href='https://github.com/jiteshsaini/robotics-level-2/tree/master/earthrover/camera_lights'>camera_lights</a></td><td>This folder contains code for streaming video using Pi Camera module and interfacing GPIO pins with Transistor switching circuit. The live video feed can be monitored on the Web Control Panel. The panel also has controls to switch ON/OFF the robot lights and camera.</td><td><a href='https://helloworld.co.in/article/camera-robot-using-raspberry-pi-web-controlled-surveillance-robot'>Read Article</a> for detailed code explaination and circuit diagram</td></tr>
  
  <tr><td>folder</td><td><a href='https://github.com/jiteshsaini/robotics-level-2/tree/master/earthrover/range_sensor'>range_sensor</a></td><td>This folder contains code for interfacing Raspberry Pi with Ultrasonic Range Sensor and associated Web controls.The folder contains python files to control Ultrasonic Distance Sensor HC-SR04 for measuring the distance from an obstacle.
The distance measured by the sensor is displayed on the Web Control Panel when the sensor is turned ON.
The robot is programmed to move backwards in case it detects an obstacle within 30 cm  </td><td> </td></tr>
  
  <tr><td>folder</td><td><a href='https://github.com/jiteshsaini/robotics-level-2/tree/master/earthrover/speaker'>speaker</a></td><td>This folder contains code for Speaker interface (Text to Speech functionality and associated Web Controls. User can type the text on the Web Control panel which is passed to the robot over wifi LAN. The text is converted to robotic speech using ESPEAK module inside Raspberry Pi 
and spoken out through a mini speaker connected to the audio port of Raspberry Pi</td><td> </td></tr>
  
  <tr><td>folder</td><td>css</td><td>contains CSS files used in "index.php" and "remote.php" files</td><td> </td></tr>
  
  <tr><td>folder</td><td>js</td><td>contains Javascript files used in "index.php" and "remote.php" files</td><td> </td></tr>
  
  <tr><td>folder</td><td>pwm</td><td>contains Python files for speed control of DC motors</td><td> </td></tr>
 
 <tr><td>file</td><td>index.php</td><td>The main file resposible for rendering Web Control Panel GUI</td><td> </td></tr>
 
 <tr><td>file</td><td>remote.php</td><td>This file generates the direction and speed control GUI. It is embedded inside the "index.php" file</td><td> </td></tr>
 
 <tr><td>file</td><td>vars.php </td><td>A file with utility functions. These functions interact with GPIO pins for achieving robotic controls</td><td> </td></tr>
 
 <tr><td>file</td><td>ajax_direction.php</td><td>receives direction data from client and calls relevant function in "vars.php" </td><td> </td></tr>
 
 <tr><td>file</td><td>ajax_speed.php</td><td>receives speed data from client and calls relevant function in "vars.php"</td><td> </td></tr>
 
 <tr><td>file</td><td>util.py</td><td>This file also has utility functions (similar to "vars.php") implemented in Pyhton. It is used when robot's direction needs to be changed programatically. Example: Obstacle avoidance implemented in "range_sensor" folder</td><td> </td></tr>
  
 </tbody>
 
</table>






