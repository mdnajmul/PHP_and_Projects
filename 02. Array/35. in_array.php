<!doctype html>
<html>
<head>
   <title> PHP Syntax</title>
   <style>
        body{font-family:vardana}
       .phpcode{width:900px; margin: 0 auto; background: #ddd;}
	   .headeroption, .footeroption {background:#444; color:#fff;text-align:center;padding:20px;}
       .headeroption h2, .footeroption h2 {margin:0}
       .maincontent{min-hieght:400px;padding:20px;}
        p{margin:0}	   
   </style>
</head>

<body>

 <div class="phpcode">
   <section class="headeroption">
       <h2>PHP Fundumental Tutorial</h2>

   </section>
   
		  <section class="maincontent">
		  <hr/>
		  PHP array() Function - in_array()
		  <hr/>
		  
			<?php
             
             /*
                Definition and Usage:
                    The in_array() function searches an array for a specific value.
                    
                    Note: If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.

                    Syntax: in_array(search, array, type)
             */
              
             //create an index array
             $userName = array("najmul","ovi","juwel","rana","aslam");
             //hold username which comes from user 
             if(isset($_POST['username'])){
                 $name = $_POST['username'];
                 
                 //check user give username is exists in the array
                 if(in_array($name, $userName)){
                     echo "$name is Exists.";
                 } else{
                     echo "$name is not Exists.";
                 }
             }  
       
			 
            ?>
			
			<!-- Create a input form for user give value -->
			<form action="" method="post">
			    <input type="text" name="username"/>
			    <input type="submit" value="Submit"/>
			</form>



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>