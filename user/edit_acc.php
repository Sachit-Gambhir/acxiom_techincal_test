<?php
	
	@session_start();
	include("includes/db.php");
	
	if(isset($_GET['edit_acc'])){
		
		$user = $_SESSION['USER_NAME'];
		
		$get_customer = "select * from users where u_email='$user'";
		
		$run_customer = mysqli_query($con, $get_customer);
		
		$row_customer = mysqli_fetch_array($run_customer);
		
		$id = $row_customer['u_id'];
		$name = $row_customer['u_name'];
		$c_user = $row_customer['u_email'];
		$pass = $row_customer['u_pass'];
		$addr = $row_customer['u_address'];
		$contact = $row_customer['u_contact'];
	}
?>
<link rel="stylesheet" href="css/my_acc.css">
<form action="" method="post" enctype="multipart/form-data" class="edt-acc" style="margin-top:-40px;">	  
	<table width="750" cellspacing="12" cellpadding="5">
		<tr style="text-align:center;">
			<td colspan="4"><h2 style="text-align:center; margin-left:150px; padding-top:20px; padding-bottom:20px; font-size:40px; color:blue;">Edit your Account Details</h2></td>
		</tr>
		<tr>
			<td style="text-align:right; padding-bottom:15px;">User Name : </td>
			<td><input type="text" name="C_Name" value="<?php echo $name;?>" style="padding-left:5px; margin-left:12px; margin-bottom:15px;" size=25 /></td>
		</tr>
				
		<tr>
			<td style="text-align:right; padding-bottom:15px;">User E-mail : </td>
			<td><input type="text" name="C_email" style="padding-left:5px; margin-left:12px; margin-bottom:15px;" value="<?php echo $c_user;?>" readonly="true"/></td>
		</tr>
								
		<tr>
			<td style="text-align:right; padding-bottom:15px;">User Password : </td>
			<td><input type="password" style="padding-left:5px; margin-left:12px; margin-bottom:15px;" name="C_pass" value="<?php echo $pass; ?>" readonly="true"/></td>
		</tr>

		<tr>
			<td style="text-align:right; padding-bottom:15px;">User Address : </td>
			<td><input type="text" style="padding-left:5px; margin-left:12px; margin-bottom:15px;" name="C_address" value="<?php echo $addr;?>"/></td>
		</tr>
		
		<tr>
			<td style="text-align:right; padding-bottom:15px;">Contact No.: </td>
			<td><input type="text" name="C_contact" style="padding-left:5px; margin-left:12px; margin-bottom:15px;" value="<?php echo $contact;?>"/></td>
		</tr>
		<tr style="text-align:center;">
			<td colspan="6"><input type="submit" name="update" value="Update Account" style="height:55px; width:200px; margin-right:90px; margin-top:20px;	outline:none; border:none; background:yellow; font-size:20px; font-weight:600; border-radius:15px; cursor:pointer;"/></td>
		</tr>
		
	</table>
</form>

<?php

	if(isset($_POST['update'])) {
		
		$ip = getIp();

		$c_id = $id;
		$c_name = $_POST['C_Name'];
		$c_email = $_POST['C_email'];
		$c_pass = $_POST['C_pass'];
		$c_addr = $_POST['C_address'];
		$c_contact = $_POST['C_contact'];
		
		
		$update_c = "UPDATE users SET u_name='$c_name',u_email='$c_email',u_address='$c_addr',u_contact='$c_contact' where u_id='$c_id'";
		
		$run_update = mysqli_query($con, $update_c);
		
		if($run_update) {
			echo "<script>alert('Your account successfully updated');</script>";
			echo "<script>window.open('my_acc.php','_self')</script>";
		}
	

		
	}

?>
