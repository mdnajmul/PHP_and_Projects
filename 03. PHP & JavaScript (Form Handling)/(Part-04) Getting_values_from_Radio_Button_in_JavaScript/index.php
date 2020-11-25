<?php include "header.php";?>
	
	<script>
	    function clickHere(){
			
			var gender_length = document.myform.gender.length;
			
			for(i=0; i<gender_length; i++){
				var checked_value = document.myform.gender[i].checked;
				if(checked_value){
					var value1 = document.myform.gender[i].value;
				}
			}
			var value_new = "Your Gender is: "+value1;
            document.getElementById("demo").innerHTML = value_new;			
		}
	</script>	
	
     
	 <div id="demo"></div>
	 
    <form name="myform" id="myform1" onsubmit="clickHere(); return false;">
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
			    <td></td>
				<td>
				   <input type="submit" value="Submit"/>
				   <input type="reset" value="Clear"/>
				</td>
			</tr>
		</table>
	</form>
	
	
<?php include "footer.php"; ?>	
			
