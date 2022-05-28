<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$api = 'Daily_income/getMember_roi';
			$data = 'member_id='.$this->session->userdata('user_id');
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			// echo "<pre>";
			// print_r($result);die;
			if(empty($result['data']['total_roi'])){$d['R'] =  0;}else{$d['R'] =  $result['data']['total_roi'];};
			if(empty($result['data']['total_income'])){$d['I'] =  0;}else{$d['I'] =  $result['data']['total_income'];};
			if(empty($result['data']['total_matching'])){$d['M'] =  0;}else{$d['M'] =  $result['data']['total_matching'];};
			if(empty($result['data']['total_withdrawal'])){$d['W'] =  0;}else{$d['W'] =  $result['data']['total_withdrawal'];};
			if(empty($result['data']['member_details'][0]['name'])){$d['name'] =  0;}else{$d['name'] =  $result['data']['member_details'][0]['name'];};
			if(empty($result['data']['member_details'][0]['mobile_no'])){$d['mobile'] =  0;}else{$d['mobile'] =  $result['data']['member_details'][0]['mobile_no'];};
			if(empty($result['data']['member_details'][0]['email_id'])){$d['email'] =  0;}else{$d['email'] =  $result['data']['member_details'][0]['email_id'];};
			if(empty($result['data']['member_details'][0]['member_id'])){$d['member'] =  0;}else{$d['member'] =  $result['data']['member_details'][0]['member_id'];};
			// echo "<pre>";
			// print_r($d['mobile']);die;
			$d['v'] = "Member/dashboard";
			$this->load->view('templates',$d);
		}
	}
?>