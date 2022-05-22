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
			$member_id = $_SESSION['user_id'];
			$api = 'Package/get_my_packages';
			$data = 'member_id='.$_SESSION['user_id'];
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$d['pakage'] = $result['data'];

			$d['v'] = "Member/pakage_view";
			$this->load->view('templates',$d);
		}	
	}
?>