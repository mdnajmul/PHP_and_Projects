<?php

    class Php{
		
		public static function frameWork(){
			
			/*
			//by using self keyword,it shows only base/super class name
			echo self::getClass()."<br/>";
			*/
			
			
			//by using static keyword, it shows current class or base & sub both class name.
			//using static keyword is called Late Static Binding.
			echo static::getClass()."<br/>";
		}
		
		public static function getClass(){
			
			//return class name "Php"
			return __CLASS__;
		}
		
	}


?>