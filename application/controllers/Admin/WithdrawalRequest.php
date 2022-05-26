<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class WithdrawalRequest extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$d['v'] = "Admin/withdrwalRequest_view";
			$this->load->view('templates',$d);
		}

		public function RequestList()
		{
			$api = 'Withdrawal/getFundRequestedList';
			$data = 'current_status='.$this->input->post('current_status',true);
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			echo json_encode($result);
		}	
	}
?>