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

		public Function ActivatioTreeDetails()
		{
			$d['v'] = "Admin/activationTree";
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

		public function saveCommission()
		{	
			$sponser = [];
			$maching = [];
			$sponser = isset($_POST['sponser'])?$_POST['sponser']:NULL;
			$maching = isset($_POST['maching'])?$_POST['maching']:NULL;

			$sponserParent = isset($_POST['sponserParent'])?$_POST['sponserParent']:NULL;
			$machingParent = isset($_POST['machingParent'])?$_POST['machingParent']:NULL;

			$reg_id = $_POST['reg_id'];
			$package_amount = $_POST['package_amount'];
			$activate_date = $_POST['activate_date'];
			$expiry_date = $_POST['expiry_date'];

			$api = 'Package/update_activation_commison';
			$data = 'sponser='.json_encode($sponser,true).'&maching='.json_encode($maching,true).'&sponserParent='.json_encode($sponserParent,true).'&machingParent='.json_encode($machingParent,true).'&c_by='.$this->session->userdata('user_id').'&reg_id='.$reg_id.'&package_amount='.$package_amount.'&activate_date='.$activate_date.'&expiry_date='.$expiry_date;
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			// print_r($result);die;
			if($result['response_code']== 200) 
			{
				$this->session->set_flashdata('success', $result['msg']);
                redirect('Admin/ActivationRequest');
			}else{
				$this->session->set_flashdata('error', $result['msg']);
                redirect('Admin/ActivationRequest');
			}
			
		}

		public function get_activate_commission_data()
		{
			$api = 'Package/activate_requested_packages';
			$data = 'user_request_id='.$this->input->post('user_request_id',true);
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			echo json_encode($result,true);
		}
		

	}
?>