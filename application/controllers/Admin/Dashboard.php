<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$d['v'] = "Admin/dashboard";
			$this->load->view('templates',$d);
		}

		public function test()
		{
			$d['v'] = "test";
			$this->load->view('templates',$d);
		}	
	}
?>