<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Package extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$api = 'Plan/getPlanList';
			$data = '';
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$d['pakage_list'] = $result['data'];

			$d['v'] = "Admin/package_view";
			$this->load->view('templates',$d);
		}

		public function edit_package_details()
		{
			$api = 'Plan/getPlanList';
			$data = 'package_id='.$this->input->post('package_id');
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$d['packagedata'] = $result['data'];

			$this->load->view('ajax/ajax_editPakage_details',$d);
		}

		public function UpdatePackagedata()
		{
			// echo "<pre>";
			// print_r($_POST); die;
			$api = 'Plan/updatePackage';
			$data = 'id='.$this->input->post('id').'&package_name='.$this->input->post('package_name').'&package_amount='.$this->input->post('package_amount').'&profit_perc='.$this->input->post('profit').'&roi_perc='.$this->input->post('roi').'&sponsor_income='.$this->input->post('sponsor_income').'&matching_perc='.$this->input->post('matching').'&capping='.$this->input->post('capping').'&effected_from='.$this->input->post('effect_from').'&effected_to='.$this->input->post('effect_to').'&d_by='.$this->session->userdata('user_id');
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			if($result['response_code'] == 200)
            {
                $this->session->set_flashdata('success', $result['msg']);
                redirect('Admin/Package');
            }
            else
            {
                $this->session->set_flashdata('error', $result['msg']);
                redirect('Admin/Package');
            }
		}

		public function deletepackage()
		{
			$api = 'Plan/deletePlan';
			$data = 'id='.$this->input->post('id').'&d_by='.$this->session->userdata('user_id');
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			print_r($result['response_code']);
		}	
	}
?>