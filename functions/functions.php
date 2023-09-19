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

function getCaterer() {
	
	global $con;
	
	$get_nvend = "select * from vendors where v_catg='Catering' order by RAND() LIMIT 1";
	
	$run_nvend = mysqli_query($con, $get_nvend);
	
	while($row_nvend = mysqli_fetch_array($run_nvend)) {
		
		$nv_name = $row_nvend ['v_name'];
		$nv_contact = $row_nvend['v_contact'];
		
		
		echo" 
		<img  src='images/1a.jpeg' class='box-4'>
        <div class='post-preview'>
        <h2 class='single.html'style='color: black; text-align:center;'>$nv_name</a></h2><br>
		<p class='preview-text'>
		 Special Offer: <s>20000/-</s> 17000/-<br><br>
		 <button style='border:none; background:none;'><h4><a href='caterers.php' style='text-decoration:none;'>Show More..</h4></a></button>
		</p>
		</div>
			";
	}
}

function getLight() {
	
	global $con;
	
	$get_nvend = "select * from vendors where v_catg='Lighting' order by RAND() LIMIT 1";
	
	$run_nvend = mysqli_query($con, $get_nvend);
	
	while($row_nvend = mysqli_fetch_array($run_nvend)) {
		
		$nv_name = $row_nvend ['v_name'];
		$nv_contact = $row_nvend['v_contact'];
		
		
		echo" 
		<img  src='images/2a.jpeg' class='box-4'>
        <div class='post-preview'>
        <h2 class='single.html'style='color: black; text-align:center;'>$nv_name</a></h2><br>
		<p class='preview-text'>
		 Special Offer: <s>3900/-</s> 3600/-<br><br>
		 <button style='border:none; background:none;'><h4><a href='caterers.php' style='text-decoration:none;'>Show More..</h4></a></button>
		</p>
		</div>
			";
	}
}

function getFlorist() {
	
	global $con;
	
	$get_nvend = "select * from vendors where v_catg='Florist' order by RAND() LIMIT 1";
	
	$run_nvend = mysqli_query($con, $get_nvend);
	
	while($row_nvend = mysqli_fetch_array($run_nvend)) {
		
		$nv_name = $row_nvend ['v_name'];
		$nv_contact = $row_nvend['v_contact'];
		
		
		echo" 
		<img  src='images/3a.jpeg' class='box-4'>
        <div class='post-preview'>
        <h2 class='single.html'style='color: black; text-align:center;'>$nv_name</a></h2><br>
		<p class='preview-text'>
		 Special Offer: <s>4800/-</s> 4200/-<br><br>
		 <button style='border:none; background:none;'><h4><a href='caterers.php' style='text-decoration:none;'>Show More..</h4></a></button>
		</p>
		</div>
			";
	}
}

function getDecor() {
	
	global $con;
	
	$get_nvend = "select * from vendors where v_catg='Decoration' order by RAND() LIMIT 1";
	
	$run_nvend = mysqli_query($con, $get_nvend);
	
	while($row_nvend = mysqli_fetch_array($run_nvend)) {
		
		$nv_name = $row_nvend ['v_name'];
		$nv_contact = $row_nvend['v_contact'];
		
		
		echo" 
		<img  src='images/4a.jpeg' class='box-4'>
        <div class='post-preview'>
        <h2 class='single.html'style='color: black; text-align:center;'>$nv_name</a></h2><br>
		<p class='preview-text'>
		 Special Offer: <s>5500/-</s> 4800/-<br><br>
		 <button style='border:none; background:none;'><h4><a href='caterers.php' style='text-decoration:none;'>Show More..</h4></a></button>
		</p>
		</div>
			";
	}
}