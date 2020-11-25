<?php include "header.php"; ?>

<?php

   	spl_autoload_register(function($class_name){
		
		include $class_name.".php";
	});

?>

<?php
   //create a object from "student" class for access method from this class
   $stu = new student();

?>

<section class="mainleft">
	<form action="" method="post">
		<table>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name" placeholder="Your Name..." required="1"/></td>
			</tr>
			
			<tr>
				<td>Department: </td>
				<td><input type="text" name="dep" placeholder="Your Department..." required="1"/></td>
			</tr>
			
			<tr>
				<td>Age: </td>
				<td><input type="text" name="age" placeholder="Your Age..." required="1"/></td>
			</tr>
			
			<tr>
				<td></td>
				<td>
					<input type="submit" name="create" value="Submit"/>
				</td>
			</tr>
		</table>
	</form>
</section>


<section class="mainright">
	<table class="tblone">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Department</th>
			<th>Age</th>
			<th>Action</th>
		</tr>

	<?php
	//run foreach(){} loop for show data from table
		$i=0;
		foreach($stu->readAll() as $key=>$val){
			  $i++;
	?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $val['name'];?></td>
				<td><?php echo $val['dep'];?></td>
				<td><?php echo $val['age'];?></td>
				<td>
					<a href="">Edit</a> ||
					<a href="">Delete</a>
				</td>
			</tr>
	<?php }?>
	
	</table>
</section>

<?php include "footer.php"; ?>