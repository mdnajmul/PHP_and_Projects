<?php

    //create a class "Gtalk" which implements "Observer" interface
    class Gtalk implements Observer{
		
		////override "message()" method which show/notify message from "Gtalk"
		public function message(){
		   
		   echo "Message from Google Talk.<br/>";
		}
	}

?>