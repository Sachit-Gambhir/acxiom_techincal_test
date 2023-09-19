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
        <h1 class="head-login">ADMIN SIGNUP</h1>
        <label class="left"><b>Name</b></label>  <input type="text" placeholder="Enter your Name" name="name" required>
        <label class="left"><b>User Name</b></label>  <input type="text" placeholder="Enter your User_Name" name="user" required>
        <label class="left"><b>Password</b></label> <input type="password" placeholder="Enter your Password" name="pass" required>
        <div class="button-set">
            <button type="submit" name="register">SIGNUP</button>
			</div>
			<span><a href="admin/login.php">Have an Account? Login here.</a></span>
    </form>
    </div>
    </div>
    
</body>

</html>

<?php

	if(isset($_POST['register'])) {
		
		$ip = getIp();
		
		$a_name = $_POST['name'];
		$a_user = $_POST['user'];
		$a_pass = $_POST['pass'];
		
		
		$insert_a = "insert into admin
		(a_ip,a_name,a_user,a_pass) 
		values ('$ip','$a_name','$a_user','$a_pass')";
		
		$run_a = mysqli_query($con, $insert_a); 
		
        
        echo "<script>alert('Account has been created successfully, Thanks!')</script>";
	    echo "<script>window.open('login.php','_self')</script>";
            
	}

?>