<?php include "header.php"; ?>

<?php

   	spl_autoload_register(function($class_name){
		
		include $class_name.".php";
	});

?>




<!-- This section use for left side View data inside browser-->
<section class="mainleft">
<?php
   //create a object from "student" class for access method from this class
   $stu = new student();
   
// This is for create data //
//using $_POST[''] method for read data & put these inside variable   
   if(isset($_POST['create'])){
	   
	   //put values inside the variables
	   $name = $_POST['name'];
	   $dep = $_POST['dep'];
	   $age = $_POST['age'];
       
	   //call setName(),setDep(),setAge() function by object of "student" class
	   $stu->setName($name);
	   $stu->setDep($dep);
	   $stu->setAge($age);
	   
	   //call insert() function for validation
	   if($stu->insert()){
		   echo "<span class='insert'>Data inserted successfully...</span>";
	   }
   } 


// This is for update data //
   if(isset($_POST['update'])){
	   
	   //put data inside the variables by using $_POST[''] method
	   $id = $_POST['id'];
	   $name = $_POST['name'];
	   $dep = $_POST['dep'];
	   $age = $_POST['age'];
   
       //call setName(),setDep(),setAge() function by object of "student" class
	   $stu->setName($name);
	   $stu->setDep($dep);
	   $stu->setAge($age);
	   
	   //call insert() function for validation
	   if($stu->update($id)){
		   echo "<span class='insert'>Data updated successfully...</span>";
	   }
   }    
?>

<?php
//This is for get id from database table & put inside a variable
//This id used for delete data from table
    if(isset($_GET['action']) && $_GET['action']=='delete'){
		
		$id = (int)$_GET['id'];
		//call "delete()" function 
		if($stu->delete($id)){
			echo "<span class='delete'>Data deleted successfully...</span>";
		}
	}	
?>

<?php
//This is for get id from database table & put inside a variable
    if(isset($_GET['action']) && $_GET['action']=='update'){
		
		$id = (int)$_GET['id'];
		//call "readById()" function & passes id through this function
		$result = $stu->readById($id);
?>

<!-- This form use for Updated Data-->
	<form action="" method="post">
		<table>
		     <!-- This input tag use for echo id from table & keep it hidden -->
		     <input type="hidden" name="id" value="<?php echo $result['id'];?>"/>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name" value="<?php echo $result['name'];?>" required="1"/></td>
			</tr>
			
			<tr>
				<td>Department: </td>
				<td><input type="text" name="dep" value="<?php echo $result['dep'];?>" required="1"/></td>
			</tr>
			
			<tr>
				<td>Age: </td>
				<td><input type="text" name="age" value="<?php echo $result['age'];?>" required="1"/></td>
			</tr>
			
			<tr>
				<td></td>
				<td>
					<input type="submit" name="update" value="Update"/>
				</td>
			</tr>
		</table>
	</form>
<?php } else{?>

<!-- This form use for Create data-->
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
<?php }?>	
</section>

<!-- This section use for right side View data inside browser-->
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
		foreach($stu->readAll() as $key => $val){
			  $i++;
	?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $val['name'];?></td>
				<td><?php echo $val['dep'];?></td>
				<td><?php echo $val['age'];?></td>
				<td>
				    <!-- this is for get id from database table-->
					<!-- Here,onClick='return confirm(\"Are you sure to Delete data...\")' used for pop up message-->
				    <?php echo "<a href='main.php?action=update&id=".$val['id']."'>Edit</a>";?> ||
					<?php echo "<a href='main.php?action=delete&id=".$val['id']."' onClick='return confirm(\"Are you sure to Delete data...\")'>Delete</a>";?>
				</td>
			</tr>
<?php }?>
	
	</table>
</section>

<?php include "footer.php"; ?>