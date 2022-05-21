<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class ActivatioRequest extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$d['v'] = "Member/memerActivation_request";
			$this->load->view('templates',$d);
		}	
	}
?>