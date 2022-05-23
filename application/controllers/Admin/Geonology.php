<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Geonology extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$d['v'] = "Admin/geonology";
			$this->load->view('templates',$d);
		}	
	}
?>