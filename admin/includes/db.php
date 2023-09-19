<?php

$con = mysqli_connect("localhost:3307","root","","event_management");

if (mysqli_connect_errno()) {
	
	echo "Failed to connect to MySQL :" .mysqli_connect_errno();
}
?>