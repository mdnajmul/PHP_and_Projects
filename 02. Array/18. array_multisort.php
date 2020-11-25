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
		  PHP array() Function - array_multisort()
		  <hr/>
		  
			<?php
             
            /*
               Definition and Usage:
                  The array_multisort() function returns a sorted array. You can assign one or more arrays. The function sorts the first array, and the other arrays follow, then, if two or more values are the same, it sorts the next array, and so on.
                  
                  Note: String keys will be maintained, but numeric keys will be re-indexed, starting at 0 and increase by 1.
                  
                  Note: We can assign the sortorder and the sorttype parameters after each array. If not specified, each array parameter uses the default values.
            */  
             
            echo "-----------------------------------------Sorted One Array---------------------------------------------<br/>";  
			 //create an array
            $col_one = array("green","red","blue","black","white","yellow");
			//sort array value
			array_multisort($col_one);
			//print array value
			print("<pre>");
			print_r($col_one);
			print("</pre>");
			
			echo "<br/>--------------------------------------Sorted Two Array---------------------------------------------<br/>";
			

            //create two array  
            $col_two = array("green","red","blue");
            $col_three= array("black","white","yellow");
			//sort these two array
            //Note: First array is sorted Asscending order, And Second Array is sorted Desscending order  
            array_multisort($col_two,$col_three);
			/*
               //we also write asscending keywords, desscending keywords in array_multisort() function
               array_multisort($col_two,SORT_DESC, $col_two,SORT_ASC);
            */   
			   
			print("<pre>");
			print_r($col_two);
			print("</pre>");
			
		    print("<pre>");
			print_r($col_three);
			print("</pre>");
			   

			

			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>