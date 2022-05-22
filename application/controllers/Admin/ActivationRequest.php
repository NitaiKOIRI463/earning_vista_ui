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

		public function get_request_data()
		{
			$api = 'Package/get_requested_packages';
			$data = 'member_id='.$this->input->post('member_id',true).'&current_status='.$this->input->post('current_status',true);
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			echo json_encode($result,true);
		}
		

	}
?>