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
    
	//Strategy Design Pattern
	//Theme: we send notfication to parents from school
	//how many ways we can send notfication? Ways like: email,sms,fax, etc.
	//write code for these possible ways is called Strategy Design
	
	
    spl_autoload_register(function($class_name){
		
		include $class_name.".php";
	});
	
	
	$user = new User();
	$msg = $user->getMsg();
	
	
	switch($msg){
		
		case 'email':
		    $objmsg = new sendEmail();
			break;
		
        case 'sms':
            $objmsg = new sendSms();
            break;
    
        case 'fax':
            $objmsg = new sendFax();
            break;			
		
	}
	$objmsg->notification();
	
	 

?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>