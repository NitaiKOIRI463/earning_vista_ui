<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class AdminLogin extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$this->load->view("Admin/adminLogin");
		}

		public function doLogin()
		{
			$d['v'] = 'Admin/Dashboard';
			$this->load->view('templates',$d);
		}
	}
?>