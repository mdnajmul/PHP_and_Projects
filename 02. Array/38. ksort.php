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
		  PHP array() Function - ksort()
		  <hr/>
		  
			<?php
             
             /*
                Definition and Usage:
                    The ksort() function sorts an associative array in ascending order, according to the key.
                    
                    Tip: Use the krsort() function to sort an associative array in descending order, according to the key.
                    
                    Tip: Use the asort() function to sort an associative array in ascending order, according to the value.

                    Syntax: ksort(array, sorttype)
             */
              
             //create an associative array
             $student = array(
             
                 "Najmul"  => "30",    
                 "Aslam"   => "34",    
                 "Juwel"   => "25",    
                 "Shamim"  => "28"    
                 
             );
            
             //sort ascending order according to the key
             ksort($student);  
              
             //show sorted values
             foreach($student as $name=>$age){
                 echo "Name: ".$name.", Age: ".$age."<br/>";
             }
       
			 
            ?>



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>