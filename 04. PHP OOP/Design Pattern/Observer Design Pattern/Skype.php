<?php

   //create a class "Skype" which implements "Observer" interface
   class Skype implements Observer{
	   
	   //override "message()" method which show/notify message from "Skype"
	   public function message(){
		   
		   echo "Message from skype.<br/>";
		   
	   }
	   
   }

?>