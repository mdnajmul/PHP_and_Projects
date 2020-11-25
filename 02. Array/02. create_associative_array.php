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
		  PHP array() Function - Create Associative Array
		  <hr/>
		  
			<?php
            //Create Associative Array & Print array by foreach loop
			$age = array(
			             "Najmul" => "23",
						 "Shamim" => "22",
						 "Jewel" => "24",
						 "Aslam" => "21"
						);
						
                        //print array key & value by using foreach loop
						foreach($age as $name => $value){
							echo "Name: ".$name.","." Age: ".$value;
							echo "<br/>";
						}
             
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>