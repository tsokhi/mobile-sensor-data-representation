<?php

$x = $_POST['x_acc'];
$y = $_POST['y_acc'];
$z = $_POST['z_acc'];

$host="localhost";
$user="root";
$pass="welcome";
$db="sensor_data";


$connection= mysql_connect($host,$user,$pass) or die("unable...........");

mysql_select_db($db) or die("unable...........");


 mysql_query("INSERT INTO accelerometer_data(x_acc,y_acc,z_acc) VALUES('$x','$y','$z')");
 		
 			if(mysql_affected_rows() == 1){
				echo 'done';
			}
			else{
				echo 'fails';
			}
mysql_close($connection);
?>
