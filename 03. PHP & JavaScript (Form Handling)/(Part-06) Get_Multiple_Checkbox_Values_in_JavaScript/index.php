<?php include "header.php";?>

	
		<script>
		     function multiCheck(){
				 var check_length = document.myform.code.length;
				 var res = "";
				 
				 for(i=0; i<check_length; i++){
					 var check_value = document.myform.code[i].checked;
					 if(check_value){
						res += document.myform.code[i].value+", ";
					 }
				 }
				 var res_new = "You are expert: "+res;
				 document.getElementById("demo").innerHTML = res_new;
			 }
		</script>
		
		<div id="demo"></div>

		
          <form name="myform" id="myform1" onsubmit="multiCheck(); return false;">
			  <table>
				  <tr>
					  <td>Language: </td>
					  <td>
					     <input type="checkbox" name="code" value="PHP"/>PHP
					     <input type="checkbox" name="code" value="JAVA"/>JAVA
					     <input type="checkbox" name="code" value="HTML"/>HTML
					     <input type="checkbox" name="code" value="CSS"/>CSS
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