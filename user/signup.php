<?php 
include("functions/functions.php");
include("includes/db.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>
    <div class="main-container">
    <div class="main-content">
    <div class="event-head">
        <h1>CAPO's Event Solutions</h1>
    </div>
    <div class="mod-content">
    <form class="login-content" method="post" action="#">
        <h1 class="head-login">USER SIGNUP</h1>
        <label class="left"><b>Name</b></label>  <input type="text" placeholder="Enter your Name" id='name' name="name" required>
        <label class="left"><b>Email</b></label>  <input type="text" placeholder="Enter your email" id='user' name="user" required>
        <label class="left"><b>Password</b></label> <input type="password" placeholder="Enter your Password" id='pass' name="pass" required>
        
        <label class="left" for="address"><b>Address</b></label><br>
        <input type="text" placeholder="Enter Address" name="address" id="address" required>

        <label for="contact"><b>Contact No.</b></label><br>
            <input type="text" placeholder="Enter Contact No." name="contact" id="contact" required>

        <div class="button-set">
        <button type="submit" name="register">SIGNUP</button>
        </div>
        <span><a href="login.php">Have an Account? Login here.</a></span>
    </form>
    </div>
    </div>
    
</body>

</html>

<?php

include("includes/db.php");
	
if(isset($_POST['register'])) {
		
    $ip = getIp();
    
    $u_name = $_POST['name'];
    $u_email = $_POST['user'];
    $u_pass = $_POST['pass'];
    $u_add = $_POST['address'];
    $u_contact = $_POST['contact'];
		
	$insert_u = "insert into users
		(u_ip,u_name,u_email,u_pass,u_address,u_contact) 
		values ('$ip','$u_name','$u_email','$u_pass','$u_add','$u_contact')";
		
		$run_v = mysqli_query($con, $insert_u); 
		
        echo "<script>alert('Account has been created successfully, Thanks!')</script>";
	    echo "<script>window.open('login.php','_self')</script>";
        
}

?>