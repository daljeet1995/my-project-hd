<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Home extends CI_Controller {

  	public function __construct(){
       parent ::__construct();
      
  	}

      public function index() {
		$this->load->view('home');
	}

	public function dashbord() {
		$this->load->view('dash');
	}

	public function book_stock_manage() {
		$this->load->view('book_stock_manage');
	}

	public function add_author() {
		$this->load->view('add_author');
	}

	public function add_publisher() {
		$this->load->view('add_publisher');
	}

	public function book_list() {
		$this->load->view('book_list');
	}

	public function book_issue_submit() {
		$this->load->view('book_issue_submit');
	}
    
    public function issue_book_list() {
		$this->load->view('issue_book_list');
	}

	public function sub_book() {
		$this->load->view('sub_book');
	}

	public function add_book() {
		$this->load->view('add_book');
	}
	public function member_manage() {
		$this->load->view('member_manage');
	}

	public function member_lst() {
		$this->load->view('member_lst');
	}
	 

   


  }

?>