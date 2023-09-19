<?php

$con = mysqli_connect("localhost:3307","root",'',"event_management");

if (mysqli_connect_errno()) {
	
	echo "Failed to connect to MySQL :" .mysqli_connect_errno();
}

//getting ip address
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}