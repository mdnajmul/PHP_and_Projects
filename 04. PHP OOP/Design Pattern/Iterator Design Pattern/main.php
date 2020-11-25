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
    
	//Iterator Design Pattern
	
	spl_autoload_register(function($class_name){
		
		include $class_name.".php";
	});
	
	//create a variable where put all post from database
	$blogspots = getAllpost();
	
	//create a object from Post class
	$pst = new Post();
	//run a loop for iteration all post
	foreach($pst as $post){
		
		echo $post->getTitle();
		echo $post->getContent();
		echo $post->getDate();
		echo $post->getAuthor();
		
		//create a object from Comments class & put all comments
		$com = new Comments($post->getComments());
		    //run another loop for find different type of comments
		    foreach($com as $comment){
				
				echo $comment->getCommentsAuthor();
				echo $comment->getCommentsContent();
			}
	}

	
?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>