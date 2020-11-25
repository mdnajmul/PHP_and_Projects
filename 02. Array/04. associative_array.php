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
		  PHP array() Function - array_change_key_case()
		  <hr/>
		  
			<?php
           
                //Create Associative Array & how to print key as uppercase or lowercase
                $age = array(
                             "Najmul" => 22,
                             "Shamim" => 23,
                             "Jewel" => 21,
                             "Aslam" => 24
                            );
              
                            echo "Key as Uppercase<br/>";
                            //how to change 'key' to capital letter
                            //use <pre></pre> tag for print line by line.
                            print("<pre>");
                            print_r(array_change_key_case($age,CASE_UPPER));
                            print("</pre>");

                            echo "--------------------------------------------<br/>";
                            echo "Key as Lowercase<br/>";
                            //how to change 'key' to lower letter
                            //use <pre></pre> tag for print line by line.
                            print("<pre>");
                            print_r(array_change_key_case($age,CASE_LOWER));
                            print("</pre>");

              
              ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>