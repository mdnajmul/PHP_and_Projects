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
		  PHP array() Function - array_column()
		  <hr/>
		  
			<?php
             //Use of array_column() function
            
             //create an multidimentional associative array
			 $name = array(
			                array(
							  "id"         => "104",
							  "first_name" => "Najmul",
							  "last_name"  => "Ovi"
							),
							array(
							  "id"         => "117",
							  "first_name" => "Jewel",
							  "last_name"  => "Rana"
							),
							array(
							  "id"         => "103",
							  "first_name" => "Shamim",
							  "last_name"  => "Molla"
							)
			 
			            );
						
						
                        echo "----------------------- All last Names ---------------------------------<br/>";
                       //How to print only all lastname from multidimentional associative array $name
						
                        //Now put all 'lastname' inside '$lastName' array variable from '$name' multidimentional associative array by using array_column() function
						$lastName = array_column($name,'last_name');
						//Now print all last name by using print_r() function
						print("<pre>");
						print_r($lastName);
						print("</pre>");
						
              
                        echo "----------------------- All First Names ---------------------------------<br/>";
                        //How to print only all firstname from multidimentional associative array $name
              
                        //Now put all 'firstname' inside '$firstName' array variable from '$name' multidimentional associative array by using array_column() function
                        //Here, we also print id number
						$firstName = array_column($name,'first_name','id');
						
						print("<pre>");
						print_r($firstName);
						print("</pre>");
             
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>