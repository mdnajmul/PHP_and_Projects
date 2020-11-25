<?php include "header.php";?>
		
		  <?php
		    
			if(isset($_POST['submit'])){
				$val = $_POST['code'];
				echo "You are ".$val." Coder.";
			}
			
		  
		  ?>

		

		
          <form action="" method="POST" name="myform" id="myform1">
			  <table>
				  <tr>
					  <td>Language: </td>
					  <td>
					     <select name="code">
						      <option value="">Select One...</option>
						      <option value="JAVA">Java</option>
						      <option value="PHP">Php</option>
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