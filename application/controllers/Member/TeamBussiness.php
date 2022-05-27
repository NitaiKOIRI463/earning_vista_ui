<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class TeamBussiness extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$d['v'] = "Member/teamBussiness";
			$this->load->view('templates',$d);
		}

		public function GetTeamBussinessList()
		{
			$api = 'Package/get_genology';
			$data = 'parent_id='.$this->input->post('member_id',true);
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			
			echo json_encode($result);
		}	
	}
?>