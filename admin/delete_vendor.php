<?php
include("includes/db.php");

	if(isset($_GET['delete_v'])){
		
		$delete_id = $_GET['delete_v'];
		
		$delete_pro = "delete from vendors where v_id='$delete_id'"; 
	
		$run_delete = mysqli_query($con, $delete_pro); 
	
		if($run_delete){
	
		echo "<script>alert('Customer has been deleted from the records!')</script>";
		echo "<script>window.open('index.php?view_vendor','_self')</script>";
		}
	}



?> 