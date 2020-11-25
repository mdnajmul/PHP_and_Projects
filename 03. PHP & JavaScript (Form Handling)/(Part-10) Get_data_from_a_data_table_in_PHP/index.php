<?php include "header.php";?>
		   
		   <?php
		      if(isset($_POST['submit'])){
				  $name = $_POST['name1'];
				  $gender = $_POST['gender'];
				  $department = $_POST['department'];
				  $coder = $_POST['coder'];
			  
		   ?>

		  
		  <!-- Show Output Inside HTML page -->
		  
		  <table class="tblone">
			  <tr>
			     <td colspan="2" align="center">Output</td>
			  </tr>
			  <tr>
			     <td>Name</td>
				 <td><?php echo $name; ?></td>
			  </tr>
			  <tr>
			     <td>Gender</td>
				    <?php
					    if($gender == "Male"){ ?>
							
							<td><?php echo "Male"; ?></td>
						<?php } elseif($gender == "Female"){ ?>
							<td><?php echo "Female"; ?></td> 
						<?php } ?>
				 	
			  </tr>
			  <tr>
			      <td>Department</td>
				  <?php if($department == "CSE"){ ?>
					  <td><?php echo "CSE"; ?></td>
				  <?php } elseif($department == "EEE"){ ?>
					  <td><?php echo "EEE"; ?></td>
				  <?php } elseif($department == "BBA"){ ?>
					  <td><?php echo "BBA"; ?></td>
				  <?php } elseif($department == "Textile"){ ?>
					  <td><?php echo "Textile"; ?></td>
				 <?php } ?>
			  <tr>
			      <td>Language</td>
				  <td><?php echo $coder; ?></td>
			  </tr>
		  </table>
			  <?php } ?>
		  
		
          <form action="" method="post" name="myform" id="myform1">
			  <table>
			      <tr>
					  <td>Name:</td>
					  <td><input type="text" name="name1" required="1"/></td>
				  </tr>
				  <tr>
					  <td>Gender:</td>
					  <td>
						 <input type="radio" name="gender" value="Male"/>Male
						 <input type="radio" name="gender" value="Female"/>Female
					  </td>
				  </tr>
				  <tr>
				      <td>Department:</td>
					  <td>
						  <input type="checkbox" name="department" value="CSE"/>CSE
						  <input type="checkbox" name="department" value="EEE"/>EEE
						  <input type="checkbox" name="department" value="BBA"/>BBA
						  <input type="checkbox" name="department" value="Textile"/>Textile
					  </td>
				  </tr>
				  <tr>
					  <td>Language:</td>
					  <td>
						  <select name="coder" required="1">
							  <option value="">Select One</option>
							  <option value="JAVA">JAVA</option>
							  <option value="PHP">PHP</option>
							  <option value="C++">C++</option>
							  <option value="JS">JS</option>
						  </select>
					  </td>
				  </tr>
				  <tr>
					  <td></td>
					  <td>
					     <input type="submit" name="submit" value="Submit"/>
					     <input type="reset" value="Clear"/>
					  </td>
				  </tr>
			  </table>
		  </form>
	 

			
<?php include "footer.php";?>