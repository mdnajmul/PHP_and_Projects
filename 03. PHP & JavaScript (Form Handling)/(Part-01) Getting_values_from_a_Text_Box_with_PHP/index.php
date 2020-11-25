<?php include "header.php"; ?>

    
	<?php
	  
	    //we use $_POST[''] method for take value from input field 
	    if(isset($_POST['username'])){
			
			//put value inside $name variable which are take from input field by $_POST[''] method
			$name = $_POST['username'];
			
			//print that value which are comes from input field
			echo "Your user name is: ".$name;
			
		}
	  
	 ?>
	
    <form action="" method="post" name="myform" id="myform1">
		<table>
			<tr>
				<td>Username: </td>
				<td><input type="text" name="username" required="1"/></td>
			</tr>
			<tr>
			    <td></td>
				<td>
				<input type="submit" value="Submit"/>
				<input type="reset" value="Clear"/>
				</td>
			</tr>
		</table>
	</form>
	


	
	
	
<?php include "footer.php";?>	
			 
	