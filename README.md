# Robotics Level 2 : Interfacing Camera, Lights, Ultrasonic Distance Sensor and Speaker with robot

The robot gets additional hardware. This repo contains code to interface robot with PiCamera, transistors (for switching 12V high brightness LEDs), Ultrasonic Distance Sensor and Speaker (for text to speech)

In this level, i have interfaced additional hardware with the robot. The code for interfacing the additional hardware is placed in the respective folders inside 'earthrover' directory.

Further, added a PHP file 'index.php' which is responsible for generation of Web GUI or Web Control Panel of the robot. Using this panel, user can interact with the robot and control its behaviour

Brief overview of the code is as follows:-

## camera_lights

Created a Raspberry Pi camera server which can be turned ON / OFF through Web ontrol Panel.

Transistor control logic for controlling 12 V high brightness LEDs. These mimic the headlights and camera lights of the robot.

## range_sensor

The folder contains python files to control Ultrasonic Distance Sensor HC-SR04 for measuring the distance from an obstacle.
The distance measured by the sensor is displayed on the Web Control Panel when the sensor is turned ON.
The robot is programmed to move backwards in case it detects an obstacle within 30 cm 

## speaker

This folder contains the logic of text to speech functionality. User can type the text on the Web Control panel which is passed to the robot over wifi LAN. The text is converted to robotic speech using ESPEAK module in Raspberry Pi 
and spoken out through a mini speaker connected to the audio port of Raspberry Pi
