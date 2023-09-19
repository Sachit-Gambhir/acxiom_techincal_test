<?php
if(!isset($_SESSION['USER_NAME'])){
	
	echo "<script>window.open('login.php','_self')</script>";
}
else {

?>
<head>
<style type="text/css">
table{border: 2px solid black;}
th {border-bottom:2px solid;}
</style>
</head>
<table width="797"  cellpadding="8" style="text-align:center; background:#ffffff;">
	
	<tr style="text-align:center; margin-top:10px;">
		<td colspan="10" style="border-bottom:2px solid;"><h2>View All Vendors</h2></td>
	</tr>
	
	<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Contact</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php
		include("includes/db.php");
		
		$i=0;
		
		$get_c = "select * from vendors";
		
		$run_c = mysqli_query($con, $get_c);
		
		while($row_c=mysqli_fetch_array($run_c)){
			
			$id       = $row_c['v_id'];
			$name     = $row_c['v_name'];
			$email    = $row_c['v_user'];
			$pass     = $row_c['v_pass'];
			$catg     = $row_c['v_catg'];
			$addr     = $row_c['v_address'];
			$cont     = $row_c['v_contact'];
			$i++;
			
	?>
	
	<tr style="text-align:center;">
		<td><?php echo $i; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $catg; ?></td>
		<td><?php echo $addr; ?></td>
		<td><?php echo $cont; ?></td>
		<td><a href="index.php?edit_vendor=<?php echo $id;?>">Edit</a></td>
		<td><a href="delete_customers.php?delete_v=<?php echo $id;?>">Delete</a></td>
	</tr>
	<?php } ?> 
</table>
<?php } ?>