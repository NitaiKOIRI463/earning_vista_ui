<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class GlobalSetup extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$api = 'Global_setup/getsetUp_data';
			$data = '';
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$d['G_setup'] = $result['data'];

			$d['v'] = "Admin/global_setup_view";
			$this->load->view('templates',$d);
		}

		public function editSet_Up()
		{
			$api = 'Global_setup/getsetUp_data';
			$data = 'id='.$this->input->post('id');
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$d['G_setupDetails'] = $result['data'];
			$this->load->view('ajax/ajax_editGlobalSetup',$d);
		}	

		public function updateSetUpData()
		{
			$api = 'Global_setup/update_globalSetUp';
			$data = 'id='.$this->input->post('id',true).'&value='.$this->input->post('value',true).'&effect_from='.$this->input->post('effect_from',true).'&effect_to='.$this->input->post('effect_to',true).'&key='.$this->input->post('key',true).'&d_by='.$this->session->userdata('user_id',true);
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			if($result['response_code'] == 200)
            {
                $this->session->set_flashdata('success', $result['msg']);
                redirect('Admin/GlobalSetup');
            }
            else
            {
                $this->session->set_flashdata('error', $result['msg']);
                redirect('Admin/GlobalSetup');
            }
		}
	}
?>