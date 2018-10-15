<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Home extends CI_Controller {

  	public function __construct(){
  		
  	}

      public function index()
	{
		echo('Hello');
	}

	function h1() {
		echo "This is a home function";
	}
    function add($a,$b) {
		echo $a+$b;
	}  

   


  }

?>