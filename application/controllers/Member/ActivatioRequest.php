<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class ActivatioRequest extends MY_Controller
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
			$d['package_list'] = $result['data'];

			$api = 'Package/get_pending_packages';
			$data = 'member_id='.$this->session->userdata('user_id');
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			
			$d['prevData'] = $result['data'];
			
			$api = 'Package/get_bitcoin_address';
			$data = '';
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$d['bitcoin_address'] = $result['data'];


			$d['v'] = "Member/memerActivation_request";
			$this->load->view('templates',$d);
		}

		public function purchasePackage()
		{
			$api = 'Package/BuyPackage';
			$data = 'package_id='.$this->input->post('package_id',true).'&member_id='.$this->session->userdata('user_id').'&required_btc='.$this->input->post('btc_required',true).'&payment_type=BTC';
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			echo json_encode($result,true);
		}

		public function purchaseExpiredPackage()
		{
			$api = 'Package/expiry_package_request';
			$data = 'id='.$this->input->post('id',true).'&member_id='.$this->session->userdata('user_id');
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			echo json_encode($result,true);
		}

		public function purchasePayemntPackage()
		{
			$api = 'Package/update_package_payment_details';
			$data = 'id='.$this->input->post('id',true).'&member_id='.$this->session->userdata('user_id').'&hash_code='.$this->input->post('hash_code',true).'&screenshot='.$this->input->post('screenshot');
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			echo json_encode($result,true);
		}


	}
?>