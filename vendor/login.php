<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="main-container">
    <div class="main-content">
    <div class="event-head">
        <h1>CAPO's Event Solutions</h1>
    </div>
    <div class="mod-content">
    <form class="login-content" method="post" action="#">
        <h1 class="head-login">VENDOR LOGIN</h1>
        <label class="left"><b>User Name</b></label>  <input type="text" placeholder="Enter your User Name" id='user' name="user" required>
        <label class="left"><b>Password</b></label> <input type="password" placeholder="Enter your Password" id='pass' name="pass" required>
            <div class="button-set">
            <button type="submit" name="login">LOGIN</button>
			<button id="btn" name="clear">CLEAR</button>
            </div>
			<span><a href="signup.php">Don't have an Account? Sign up</a></span>
			
        

    </form>
    </div>
    </div>
    
</body>
<script>
    const btn = document.getElementById('btn');
    const name = document.getElementById('user');
    const pass = document.getElementById('pass');
    name.value = '';
    pass.value = '';
</script>
</html>

<?php

include("includes/db.php");
	
if(isset($_POST['login'])){
		
$uname= mysqli_real_escape_string($con, $_POST['user']);
$pass = mysqli_real_escape_string($con, $_POST['pass']);
		
$sel_user = "select * from admin where a_user='$uname' AND a_pass='$pass'";
$run_user = mysqli_query($con, $sel_user);
		
$check_user = mysqli_num_rows($run_user);
		
    if($check_user==0){
        echo "<script>alert('Password or Email is wrong, try again!')</script>";
    }
    else {
		$_SESSION['USER_NAME']=$uname;
			echo "<script>window.open('index.php?logged_in=Successfully Logged in!','_self')</script>";
		// echo "<script>alert('Succesful!')</script>";
	}
}

?>