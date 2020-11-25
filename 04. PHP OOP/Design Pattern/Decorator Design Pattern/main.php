<!doctype html>
<html>
<head>
 <title>PHP OOP Code Practice</title>
 <style>
  body{font-family:verdana}
 .phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}
 .headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}
 .headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;}
 </style>
</head>
<body>

<div class="phpcoding">
 <section class="headeroption">
  <h2><?php echo "PHP OOP Code Practice"; ?></h2>
 </section> 
 <section class="maincontent">
 
 
 
<?php
    
	//Decorator Design Pattern
	
	spl_autoload_register(function($class_name){
		
		include $class_name.".php";
	});
	
	//create object of "Post" & "Comment" class
	$post = new Post();
	$comt = new Comment();
	
	//call "filter()" method from "Post" class
	$post->filter();
	//call "filter()" method from "Comment" class
	$comt->filter();
	
	//Here we use if elseif condition.
	//if "$BBcodeEnable == false && $EmoticonEnable == false" then go to "Post" & "Comment" class
	//if "$BBcodeEnable == true && $EmoticonEnable == false" then go to "BBCodeParser" class
	//if "$BBcodeEnable == false && $EmoticonEnable == true" then go to "Emoticon" class
	if($BBcodeEnable == false && $EmoticonEnable == false){
		
		$postContent = $post->getContent();
		$commentContent = $comt->getContent();
		
	}elseif($BBcodeEnable == true && $EmoticonEnable == false){
		
		$bb = new BBCodeParser($post);
		$postContent = $bb->getContent();
		
		$bb = new BBCodeParser($comt);
		$comContent = $bb->getContent();
	}elseif($BBcodeEnable == false && $EmoticonEnable == true{
		
		$em = new Emoticon($post);
		$postContent = $em->getContent();
		
		$em = new Emoticon($comt);
		$comContent = $em->getContent();
		
		
	}
	
?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>