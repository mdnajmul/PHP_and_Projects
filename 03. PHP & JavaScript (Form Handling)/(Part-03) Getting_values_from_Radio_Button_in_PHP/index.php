<?php include "header.php"; ?>

     
	 <?php
	  
	    //we use $_POST[''] method for take value from radio field 
	    if(isset($_POST['gender'])){
			
			//put value inside $name variable which are take from radio field by $_POST[''] method
			$name = $_POST['gender'];
			
			//print that value which are comes from input field
			echo "Your Gender is: ".$name;
			
		}
	  
	 ?>
	
    <form action="" method="post" name="myform" id="myform1">
		<table>
			<tr>
				<td>Gender: </td>
				<td>
				   <input type="radio" name="gender" value="Male"/>Male
				   <input type="radio" name="gender" value="Female"/>Female
				   <input type="radio" name="gender" value="Others"/>Others
				</td>
			</tr>
			<tr>
			    <td><input type="submit" value="Submit"/></td>
			    <td><input type="reset" value="Clear"/></td>
			</tr>
		</table>
	</form>

	
<?php include "footer.php"; ?>	