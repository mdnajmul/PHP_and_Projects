<?php include "inc/header.php"; ?>
<!-- This class is for view data from database table -->
<table class="tblone">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Department</th>
			<th>Age</th>
		</tr>

	<?php
	//run foreach(){} loop for show data from table
		$i=0;
		foreach($user as $key => $val){
			  $i++;
	?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $val['name'];?></td>
				<td><?php echo $val['dep'];?></td>
				<td><?php echo $val['age'];?></td>
			</tr>
<?php }?>
	
	</table>


<?php include "inc/footer.php"; ?>