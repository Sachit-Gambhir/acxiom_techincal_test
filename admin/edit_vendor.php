<?php
	
include("includes/db.php");
include("../functions/functions.php");
if(!isset($_SESSION['USER_NAME'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {
	if(isset($_GET['edit_vendor'])){
		$edit_id = $_GET['edit_vendor'];
		
		$get_edit = "select * from vendors where v_id='$edit_id'";
		$run_edit = mysqli_query($con, $get_edit);
		$row_edit = mysqli_fetch_array($run_edit);
		
		$update_id = $row_edit['v_id'];
		
		$id = $row_edit['v_id'];
		$name = $row_edit['v_name'];
		$email = $row_edit['v_user'];
		$catg = $row_edit['v_catg'];
		$addr = $row_edit['v_address'];
		$cont = $row_edit['v_contact'];
	}
?>

<!DOCTYPE>
<html>
<title>Document</title>
<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/insert.css">
</head>

<body>
  <div class="product-back">
  		<div class="product-form">

        <form action="#" method="post" enctype="multipart/form-data" class="product">
          <h1>EDIT DETAILS</h1>
               <fieldset>
                 <div class="product-box">
										
					<div class="product-label">
                        <h4>Name</h4>
                    </div>
                    <input type="text" name="cname" value="<?php echo $name; ?>" class="input-response" /><br><br>
					
					
					 <div class="product-label">
                      <h4>User_Name</h4>
                        <input type="text" name="text" value="<?php echo $email; ?>" class="input-response" /><br><br>
                      </div> 

					  <div class="product-label">
                        <h4>Category</h4>
                    </div>
                    <input type="text" name="catg" value="<?php echo $catg; ?>" class="input-response" readonly/><br><br>
					  
					<div class="product-label">
                      <h4>Address</h4>
                        <input type="text" name="address" value="<?php echo $addr; ?>" class="input-response" /><br><br>
                      </div> 
					 
					  <div class="product-label">
                      <h4>Contact</h4>
                        <input type="text" name="contact" value="<?php echo $cont; ?>" class="input-response" /><br><br>
                      </div> 
                     <input type="submit" name="update" value="Update" class="sub-btn">
                </div>
            </fieldset>
      </form>
	  </div>
</div>
</body>
</html>

<?php

	if(isset($_POST['update'])) {
		
		$ip = getIp();
		$c_id = $id;
		$c_name = $_POST['cname'];
		$c_email = $_POST['text'];
		$c_catg = $_POST['catg'];
		$c_addr = $_POST['address'];
		$c_contact = $_POST['contact'];
		
        $update_c = "UPDATE vendors SET v_name='$c_name',v_user='$c_email',v_catg='$c_catg',v_address='$c_addr',v_contact='$c_contact' where v_id='$c_id'";
		
		$run_update = mysqli_query($con, $update_c);
		
		if($run_update) {
			echo "<script>alert('Your account successfully updated')</script>";
			echo "<script>window.open('index.php?view_vendor','_self')</script>";
		}
	}

?>
<?php } ?>