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
		  PHP array() Function - arsort () & asort()
		  <hr/>
		  
			<?php
             
             echo "---------------------------------- Use arsort() function & Show values in descending order ----------------------------------------<br/>";  
             /*
                Definition and Usage:
                    The arsort() function sorts an associative array in descending order, according to the value.
                    
                    Tip: Use the asort() function to sort an associative array in ascending order, according to the value.
                    
                    Tip: Use the krsort() function to sort an associative array in descending order, according to the key.

                    Syntax: arsort(array, sorttype) 
             */
              
			 //create associative array
			 $student = array(
			           "Najmul" => "30",
					   "Juwel"  => "24",
					   "Aslam"  => "35",
					   "Shamim" => "42"
				 );
             
             //use arsort() function to sort array values into descending order
             arsort($student);
             //show array values by using foreach() loop
             foreach($student as $name=>$age){
                 echo "Name: ".$name.", Age: ".$age."<br/>";
             }
              
             echo "<br/>---------------------------------- Use asort() function & Show values in ascending order ----------------------------------------<br/>";  
             /*
                Definition and Usage:
                    The asort() function sorts an associative array in ascending order, according to the value.
                    
                    Tip: Use the arsort() function to sort an associative array in descending order, according to the value.
                    
                    Tip: Use the ksort() function to sort an associative array in ascending order, according to the key.

                    Syntax: asort(array, sorttype) 
             */
              
             //create associative array
			 $teacher = array(
			           "Monirul" => "45",
					   "Shariar"  => "52",
					   "Ashiq"  => "40",
					   "Rajon" => "32"
				 );  
              
             //use asort() function to sort array values into ascending order
             asort($teacher);
             //show array values by using foreach() loop
             foreach($teacher as $name=>$age){
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