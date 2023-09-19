<?php
include("includes/db.php");

	if(isset($_GET['delete_u'])){
		
		$delete_id = $_GET['delete_u'];
		
		$delete_pro = "delete from users where u_id='$delete_id'"; 
	
		$run_delete = mysqli_query($con, $delete_pro); 
	
		if($run_delete){
	
		echo "<script>alert('Customer has been deleted from the records!')</script>";
		echo "<script>window.open('index.php?view_user','_self')</script>";
		}
	}



?> 