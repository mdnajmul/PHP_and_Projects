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
		  PHP array() Function - array_key_exists()
		  <hr/>
		  
			<?php
              
            /*
               Definition and Usage:
               The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist.
               
               Tip: Remember that if you skip the key when you specify an array, an integer key is generated, starting at 0 and increases by 1 for each value.
               
               Syntax: array_key_exists(key, array)
            */
             
              echo "----------------------Check For Associative Array-------------------------------<br/>";
              //create an associative array
              $arr = array(
              
                  "name"  =>  "Najmul Ovi",
                  "age"   =>  "23"
              
              );
              
              //check key exists or not (which one key we want to know)
              if(array_key_exists("name", $arr)){
                  echo "This key is exists.";
              } else {
                  echo "This key does not exists.";
              }
              
              
              echo "<br/>----------------------Check For Index Array-------------------------------<br/>";
              //create an index array
              $arr = array("name", "age");
              
              //check key exists or not (which one key we want to know)
              //Here, key value is like: 0,1,2,...
              if(array_key_exists(2, $arr)){
                  echo "This key is exists.";
              } else {
                  echo "This key does not exists.";
              }
             
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>