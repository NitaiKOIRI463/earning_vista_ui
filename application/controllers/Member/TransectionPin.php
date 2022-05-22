<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class TransectionPin extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$d['v'] = "Member/tPin";
			$this->load->view('templates',$d);
		}

		public function updateTransectionPin()
		{
			
			$api = 'T_Pin/resetPin';
			$data = 'member_id='.$_SESSION['user_id'].'&transaction_pin='.$this->input->post('old_password',true).'&new_transaction_pin='.$this->input->post('new_pasword',true);
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);

			if ($result['response_code']== 200) 
			{
				$this->session->set_flashdata('success', $result['msg']);
                redirect('Member/TransectionPin');
			}else{
				$this->session->set_flashdata('error', $result['msg']);
                redirect('Member/TransectionPin');
			}
		}	
	}
?>