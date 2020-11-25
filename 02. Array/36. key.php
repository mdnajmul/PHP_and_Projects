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
		  PHP array() Function - key()
		  <hr/>
		  
			<?php
             
             /*
                Definition and Usage:
                    The key() function returns the element key from the current internal pointer position.
                    
                    This function returns FALSE on error.

                    Syntax: key(array)
             */
              
             //create an index array
             $department = array("CSE","EEE","BBA","ETE","ENG","TEXTILE");
              
             //show current key/index number
             echo "The current key position is: ".key($department);
       
			 
            ?>



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>