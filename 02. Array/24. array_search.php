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
		  PHP array() Function - array_search()
		  <hr/>
		  
			<?php
             
               /*
                  Definition and Usage:
                     The array_search() function search an array for a value and returns the key.
                     Syntax: array_search(value, array, strict)
               */
               
               //create an associative array
               $color = array("a" => "green","b" => "red","c" => "blue","d" => "yellow","f" => "black","g" => "orange");
               
               //value hold from text feild
               if(isset($_POST['text'])){
                    global $txt;
                    $txt = $_POST['text'];
                    //search value inside $color array & return key to $res variable
                    $res = array_search($txt, $color);
                    echo "Key number of your searching element is: ".$res;
                }

       
			 
            ?>
			<!-- Create a form for user give value -->
			<form action="" method="POST">
			      <input type="text" name="text" value="<?php global $txt; echo $txt;?>"/>
				  <input type="submit" value="Submit"/>
			</form>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>