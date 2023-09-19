<!doctype html>
<?php 
session_start();
include("functions/functions.php");
include("includes/db.php");
?>
<html>
	<head>
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	   <link rel="stylesheet" href="css/vendor.css" />
	</head>
	
	<body>
	    <!--Navbar Starts Here-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="font-size:21px;">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src=images/logo_n.jpg style="height:100px;" /></a>
        <div class="d-flex">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-home"></i>&nbsp;</a>
              </li>
              <li class="nav-item">
                <?php
					        if(isset($_SESSION['USER_NAME'])){
						        echo" <a class='nav-link active' href='user/my_acc.php'><h4 style='color:yellow;text-decoration:underline;'>Hi! &nbsp;".$_SESSION['USER_NAME'].'(My Account)'."</h4></a>";
					        }
					        else {
						        echo"<a class='nav-link' href='user/login.php'>Login</a>";
					        }
				        ?>
				      </li>
              <li class="nav-item">
                <?php
					        if(isset($_SESSION['USER_NAME'])){
						        echo" <a class='nav-link active' href='logout.php'>Logout</a>";
					        }
                ?>      
              </li>
              <li><a class='nav-link' href='vendors.php'>Vendors</a></li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
           </div>
          </div>
        </div>
      </nav>
      <!--Navbar Ends Here--->
	  
	<h1> Vendors</h1>
					  
	<div >
	 <table   table style='width:80%' class='regional-container'>
		
		<tr>
		   <th>S No.</th>
		   <th>Vendors</th>
           <th> Image</th>
		   <th> view</th>
	   
	   	</tr>
		<tr>
            <td>1. </td>
            <td>Caterers</td>
            <td><img src='images/1a.jpeg' width='140' height='65'/></td>
            <td><button><a href ="caterers.php">View</a></button> </td>
		</tr>
		<tr>
            <td>2. </td>
            <td>Lighting</td>
            <td><img src='images/2a.jpeg' width='140' height='65'/></td>
            <td><button><a href ="lighting.php">View</a></button> </td>
		</tr>
        <tr>
            <td>3. </td>
            <td>Florists</td>
            <td><img src='images/3a.jpeg' width='140' height='65'/></td>
            <td><button><a href ="florist.php">View</a></button> </td>
		</tr>
        <tr>
            <td>4. </td>
            <td>Decorators</td>
            <td><img src='images/4a.jpeg' width='140' height='65'/></td>
            <td><button><a href ="decorator.php">View</a></button> </td>
		</tr>
		
		</table>
	</div>
	<div style="text-align:center">
		<a href="index.php"><button class="btn1">Home</button></a> 
	</div>
	<div class="footer-bottom">
    	&copy; CAPO's Event Solutions 2023 All Rights Reserved
    </div>
     
  
    
	</body>
</html>