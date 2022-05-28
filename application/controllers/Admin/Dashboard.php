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
			$api = 'Total_Reg/getTotalReg';
			$data = '';
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			// echo "<pre>";
			// print_r($result);die;
			$d['total_left'] = $result['data']['Left'][0]['Total_Left'];
         	$d['total_right'] = $result['data']['Right'][0]['Total_Right'];
         	$d['total_sum'] = $result['data']['Sum'][0]['Total'];
			
			$api = 'Total_Reg/get_bussiness';
			$data = '';
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			
			$d['left_business'] = $result['data']['Left_bussiness'][0]['total'];
         	$d['right_bussiness'] = $result['data']['Right_bussiness'][0]['total'];
         	$d['total_bussiness'] = $result['data']['Total_bussiness'][0]['total'];

         	$api = 'Total_Activation/Left_Activ';
			$data = '';
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$d['left_activ'] = $result['data']['Left_Activ'][0]['Total'];
         	$d['right_activ'] = $result['data']['Right_Activ'][0]['Total'];
         	$d['total_activ'] = $result['data']['Total_Activ'][0]['Total'];

         	$api = 'Total_Activation/total_sponsor';
			$data = '';
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			// echo "<pre>";
			// print_r($result);die;
			$d['sponsor_income'] = $result['data']['sponsor'][0]['Total'];
			$d['total_roi'] = $result['data']['roi'][0]['Total'];
			$d['v'] = "Admin/dashboard";
			$this->load->view('templates',$d);
		}

		public function test()
		{
			$d['v'] = "test";
			$this->load->view('templates',$d);
		}	
	}
?>