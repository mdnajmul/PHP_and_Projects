<?php

   include "model/Model.php";
   
   //This class is for controll & connected with 'Model' and 'View' classes
   
   class Controller{
	   
	   public $model;
	   
	   public function __construct(){
		   
		   $this->model = new Model();
	   }
	   
	   public function view(){
		   $user = $this->model->getStudentData();
		   include "view/View.php";
	   }
   }
?>