<?php
   
   //using namespace & give any one or more name
   //when we use more than one name, that should be write like name1\name2\name3\...
   namespace najmul;
   
    class java{
		
		public function __construct(){

		    echo "I am learning Java.<br/>";
		}
	}
	
	//when we use define function, that time no need use namspace when you call it.(only if when we use namespace at begining of the code)
	//like: echo HTML;
	//here,we didn't use namespace when we echo define function property.
	define("HTML","I love coding HTML.<br/>");
	
	//When we use constant function , that time we need use namaspace for call or print constant property.(only if when we use namespace at begining of the code)
	const CS = "CSS is good for graphic design.<br/>";
	
	//When we call any function ,that time we need use namespace for calling function().(only if when we use namespace at begining of the code)
	function coding(){
		
		 echo "I love coding.<br/>";
	}

?>