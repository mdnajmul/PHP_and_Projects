<?php include "header.php"; ?>
	
    <script>
	   function myFunction(){
		   
		   //value put into name variable which are take from input field
		   var name = document.myform.username.value;
		   var show = "Your Username is: "+name;
		   
		   //Display/print value which are take from input field
		   document.getElementById("demo").innerHTML = show;
	   }
	</script>

	<!-- create a div with id for print/display value.  -->
	<div id="demo"></div>
	
    <form name="myform" id="myform1" onsubmit="myFunction(); return false;">
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
	
	
	
<?php include "footer.php"; ?>	
	
			 
