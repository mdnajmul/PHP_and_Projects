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
		  PHP array() Function - array_slice()
		  <hr/>
		  
			<?php
              
              /*
                 Definition and Usage:
                     The array_slice() function returns selected parts of an array.
                     
                     Note: If the array have string keys, the returned array will always preserve the keys
                     
                     Syntax: array_slice(array, start, length, preserve)
              */
              
               //create indexing array
			  $col = array("green","red","blue","yellow","orange");
			  
			  //create new array with value from previous array index 1 to index 3
			  $res1 = array_slice($col,1,3);
				
				print("<pre>");
				print_r($res1);
				print("</pre>");
             
              //print index 2 to end of the element of $col array
              $res2 = array_slice($col,2);
              
                print("<pre>");
				print_r($res2);
				print("</pre>");
              
              //print "yellow","orange" by using negative index
              $res3 = array_slice($col,-2,2);
              
                print("<pre>");
				print_r($res3);
				print("</pre>");
              
       
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>