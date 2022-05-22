<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class ActivationRequest extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$d['v'] = "Admin/activateMember";
			$this->load->view('templates',$d);
		}

		public Function ActivatioTreeDetails()
		{
			$d['v'] = "Admin/activationTree";
			$this->load->view('templates',$d);
		}	
	}
?>