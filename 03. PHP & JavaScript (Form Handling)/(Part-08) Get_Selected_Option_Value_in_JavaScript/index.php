<?php include "header.php";?>   
		   <script>
		          
				  function selectOption(){
					  
					  var index = document.myform.code.selectedIndex;
					  var result = document.myform.code.options[index].value;
					  var showdata = "You are looking ".result;
					  document.getEementById("demo").innerHTML = showdata;
				  }

		   </script>
		   
		   <div id="demo"></div>
		
          <form name="myform" id="myform1" onsubmit="selectOption(); return false;">
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