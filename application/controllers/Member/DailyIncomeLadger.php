<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class DailyIncomeLadger extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$api = 'Daily_income/getIncome';
			$data = '';
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$d['incomeLader'] = $result['data'];
			$d['v'] = "Member/incomeLader_view";
			$this->load->view('templates',$d);
		}
	}
?>