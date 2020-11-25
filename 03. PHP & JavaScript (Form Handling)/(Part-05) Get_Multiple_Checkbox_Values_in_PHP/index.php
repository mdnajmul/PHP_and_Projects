<?php include "header.php";?>
		
		  <?php
		  
		    if(isset($_POST['submit'])){
				$x = $_POST['code'];
				echo "You are selected: ";
				
				
				foreach($x as $name => $val){
					echo "$val".",";
				}
			}
		  
		  ?>
		
          <form action="" method="post" name="myform" id="myform1">
			  <table>
				  <tr>
					  <td>Language: </td>
					  <td>
					     <input type="checkbox" name="code[]" value="PHP"/>PHP
					     <input type="checkbox" name="code[]" value="JAVA"/>JAVA
					     <input type="checkbox" name="code[]" value="HTML"/>HTML
					     <input type="checkbox" name="code[]" value="CSS"/>CSS
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

