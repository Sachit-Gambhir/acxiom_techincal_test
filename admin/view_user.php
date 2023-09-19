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
		<td colspan="10" style="border-bottom:2px solid;"><h2>View All Users</h2></td>
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
		
		$get_c = "select * from users";
		
		$run_c = mysqli_query($con, $get_c);
		
		while($row_c=mysqli_fetch_array($run_c)){
			
			$id       = $row_c['u_id'];
			$name     = $row_c['u_name'];
			$email    = $row_c['u_email'];
			$pass     = $row_c['u_pass'];
			$addr     = $row_c['u_address'];
			$cont     = $row_c['u_contact'];
			$i++;
			
	?>
	
	<tr style="text-align:center;">
		<td><?php echo $i; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $addr; ?></td>
		<td><?php echo $cont; ?></td>
		<td><a href="index.php?edit_user=<?php echo $id;?>">Edit</a></td>
		<td><a href="delete_customers.php?delete_u=<?php echo $id;?>">Delete</a></td>
	</tr>
	<?php } ?> 
</table>
<?php } ?>