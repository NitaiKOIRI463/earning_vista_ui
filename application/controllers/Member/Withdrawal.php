<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Withdrawal extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$member_id = $this->session->userdata('user_id',true);
			$api = 'Withdrawal/getFundRequestedList';
			$data = 'member_id='.$member_id;
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$d['reqList'] = $result['data'];
			$d['v'] = "Member/withdrawal_view";
			$this->load->view('templates',$d);
		}

		public function get_Usertotal_fund()
		{
			$api = 'Withdrawal/getTotalFund';
			$data = 'member_id='.$this->input->post('member_id',true);
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$totalAmount = $result['data'];
			print_r($totalAmount);
		}

		public function RequestWithdrawal()
		{
			$member_id = $this->session->userdata('user_id',true);
			$api = 'Withdrawal/withdrawalRequest';
			$data = 'member_id='.$member_id.'&fund='.$this->input->post('withdrawfund',true).'&c_by='.$this->session->userdata('user_id',true);
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			// print_r($result);die;
			if ($result['response_code']== 200) 
			{
				$this->session->set_flashdata('success', $result['msg']);
                redirect('Member/Withdrawal');
			}else{
				$this->session->set_flashdata('error', $result['msg']);
                redirect('Member/Withdrawal');
			}
		}

		public function approveRequest()
		{
			$api = 'Withdrawal/approvedWithdrawalRequest';
			$data = 'member_id='.$this->input->post('member_id',true).'&withdraw_id='.$this->input->post('withdraw_id',true).'&fund='.$this->input->post('fund',true).'&c_by='.$this->session->userdata('user_id',true).'&d_by='.$this->session->userdata('user_id',true);
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			print_r($result['response_code']);
		}

		public function rejectRequest()
		{
			$api = 'Withdrawal/rejectWithdrawalRequest';
			$data = 'member_id='.$this->input->post('member_id',true).'&withdraw_id='.$this->input->post('withdraw_id',true).'&d_by='.$this->session->userdata('user_id',true);
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			print_r($result['response_code']);
		}	
	}
?>