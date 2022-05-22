<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pakages extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$d['v'] = "Member/pakage_view";
			$this->load->view('templates',$d);
		}	
	}
?>