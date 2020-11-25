<?php include "header.php";?>
		   
          <script>
		      function myFunction(){
				  
				  
				  //take value from Name field & put into getName variable
				  var getName = document.myform.name1.value;
				  //print Name
				  document.getElementById("showName").innerHTML = getName;
				  
				  
				 

				 //take value from Gender field
                  //First, find length of Gender
                  var genderLength = document.myform.gender.length;
                  //use for loop for take value from gender field
                  for(i=0; i<genderLength; i++){
					  var getCheckedGen = document.myform.gender[i].checked;
					  //put checked value
					  if(getCheckedGen){
						  var getGender = document.myform.gender[i].value; 
					  }
				  }
				  //print gender
                  document.getElementById("showGender").innerHTML = getGender;



                 
                  //take value from Department field
                  //First, find length of Department
                  var departmentLength = document.myform.department.length;
				  
                  //use for loop for take value from department field
                  for(i=0; i<departmentLength; i++){
					  var getCheckedDep = document.myform.department[i].checked;
					  //put checked value
					  if(getCheckedDep){
						  var getDepartment = document.myform.department[i].value;
					  }
				  }
                  //print department
                  document.getElementById("showDepartment").innerHTML = getDepartment;				  
				  
				  
				  
				  
				  
				  //take value from Language field
				  //First, find index number_format
				  var index = document.myform.coder.selectedIndex;
				  //put select value
				  var getLanguage = document.myform.coder.options[index].value;
				  //print Language
				  document.getElementById("showLanguage").innerHTML = getLanguage;
				  
			  }
		  </script>
		  
		  <!-- Show Output Inside HTML page -->
		  
		  <table class="tblone">
			  <tr>
			     <td colspan="2" align="center">Output</td>
			  </tr>
			  <tr>
			     <td>Name</td>
				 <td><span id="showName"></span></td>
			  </tr>
			  <tr>
			     <td>Gender</td>
				 <td><span id="showGender"></span></td>
			  </tr>
			  <tr>
			      <td>Department</td>
				  <td><span id="showDepartment"></span></td>
			  </tr>
			  <tr>
			      <td>Language</td>
				  <td><span id="showLanguage"></span></td>
			  </tr>
		  </table>
		
          <form name="myform" id="myform" onsubmit="myFunction(); return false;">
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