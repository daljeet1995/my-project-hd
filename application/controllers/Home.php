<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Home extends CI_Controller {

  	public function __construct(){
       parent ::__construct();
  	}

      public function index()
	{
		$this->load->view('home');
	}

	function h1() {
		echo "This is a home function";
	}
    function add($a,$b) {
		echo $a+$b;
	}  

   


  }

?>