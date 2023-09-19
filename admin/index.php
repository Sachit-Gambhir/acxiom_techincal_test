<?php
session_start();

if(!isset($_SESSION['USER_NAME'])){
	
	echo "<script>window.open('login.php','_self')</script>";
}
else {

?>
<!DOCTYPE>
	
<html>
	<head>
		<title> Admin Panel!</title>
		<link rel="stylesheet" href="css/admin_panel.css" media="all" />	
	</head>
	
	<body>
		<div class="main-wrapper">
		
			<a href="index.php"><div id="header"></div></a>
			
			<div id="right">
				<h2 style="text-align:center; color:white;"> Manage Content </h2>
				
				<a href="index.php">Admin Home Page</a>
				<a href="index.php?view_vendors">View Vendor(s)</a>
				<a href="index.php?view_user">View User(s)</a>
				<a href="logout.php">Admin Logout</a>
				
			</div>
			
			<div id="left">
			<h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
			<?php
				
				if(isset($_GET['view_vendors'])){
					include("view_vendors.php");
				}
				if(isset($_GET['view_user'])){
					include("view_user.php");
				}
				if(isset($_GET['edit_vendor'])){
					include("edit_vendor.php");
				}
				if(isset($_GET['edit_user'])){
					include("edit_user.php");
				}
				
				?>	
				</div>
		
		
		</div>
	</body>
</html>	
<?php } ?>