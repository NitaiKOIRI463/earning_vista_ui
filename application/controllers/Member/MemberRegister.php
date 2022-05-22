<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class MemberRegister extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$this->load->view("Member/memberRegistration");
		}

		public function addMember()
		{
			$d['v'] = "Member/adminMember_registration";
			$this->load->view('templates',$d);
		}

		public function registerMember()
		{
			// if($_FILES['photo']['size'] != '')
			// {
			// 	$profileImage = base64_encode(file_get_contents($_FILES['photo']['tmp_name']));	
			// }else{
			// 	$profileImage = null;
			// }

			$api = 'Member/addMember';
			$data = 'name='.$_POST['name'].'&email_id='.$_POST['email'].'&f_h_name='.$_POST['fatherHusband_name'].'&mobile_no='.$_POST['number'].'&gender='.$_POST['gender'].'&sponsor_id='.$_POST['sponsor_id'].'&side='.$_POST['side'].'&country='.$_POST['country'].'&state='.$_POST['state'].'&city='.$_POST['city'].'&pin='.$_POST['pincode'].'&country_code='.$_POST['country_code'].'&address='.$_POST['address'].'&c_by='.$this->session->userdata('user_id');
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			// print_r($result); die;
			if ($result['response_code']== 200) 
			{
				$this->session->set_flashdata('success', $result['msg']);
                redirect('Member/MemberRegister');
			}else{
				$this->session->set_flashdata('error', $result['msg']);
                redirect('Member/MemberRegister');
			}
		}

		public function adminMember_register()
		{
			// echo "<pre>";
			// print_r($_POST); die;
			// if($_FILES['photo']['size'] != '')
			// {
			// 	$profileImage = base64_encode(file_get_contents($_FILES['photo']['tmp_name']));	
			// }else{
			// 	$profileImage = null;
			// }

			$api = 'Member/addMember';
			$data = 'name='.$_POST['name'].'&email_id='.$_POST['email'].'&f_h_name='.$_POST['fatherHusband_name'].'&mobile_no='.$_POST['number'].'&gender='.$_POST['gender'].'&sponsor_id='.$_POST['sponsor_id'].'&side='.$_POST['side'].'&country='.$_POST['country'].'&state='.$_POST['state'].'&country_code='.$_POST['country_code'].'&city='.$_POST['city'].'&pin='.$_POST['pincode'].'&address='.$_POST['address'].'&c_by='.$this->session->userdata('user_id');
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			if ($result['response_code']== 200) 
			{
				$this->session->set_flashdata('success', $result['msg']);
                redirect('Member/MemberRegister/addMember');
			}else{
				$this->session->set_flashdata('error', $result['msg']);
                redirect('Member/MemberRegister/addMember');
			}
		}

		public function verifyEmail()
		{
			$api = 'Member/verify_email';
			$data = 'email='.$_POST['email'];
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			print_r($result['response_code']);
		}

		public function verifymobile()
		{
			$api = 'Member/verify_mobile';
			$data = 'mobile='.$_POST['mobile'];
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			print_r($result['response_code']);
		}

		public function verify_sponsor()
		{
			$api = 'Member/verify_member';
			$data = 'member_id='.$_POST['sponsor_id'];
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			print_r($result['response_code']);
		}

		public function MemberList()
		{
			$api = 'Member/getRegisterData';
			$data = '';
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$d['memberList'] = $result['data']['data'];
			
			$d['v'] = "Member/member_lists";
			$this->load->view('templates',$d);
		}

		public function editMember()
		{
			$api = 'Member/getRegisterData';
			$data = 'member_id='.$_POST['member_id'];
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$d['member_details'] = $result['data']['data'];
			// echo "<pre>";
			// print_r($d['member_details']); die;
			$this->load->view('ajax/ajax_editMember_details',$d);
		}

		public function UpdateMember()
		{
			// echo "<pre>";
			// print_r($_POST); die;

			if($_FILES['photo']['size'] != '')
			{
				$profileImage = base64_encode(file_get_contents($_FILES['photo']['tmp_name']));	
			}else{
				$profileImage = null;
			}

			$api = 'Member/updateMember';
			$data = 'member_id='.$_POST['member_id'].'&name='.$_POST['name'].'&f_h_name='.$_POST['fatherHusband_name'].'&mobile_no='.$_POST['number'].'&gender='.$_POST['gender'].'&country='.$_POST['country'].'&state='.$_POST['state'].'&city='.$_POST['city'].'&pin='.$_POST['pincode'].'&address='.$_POST['address'].'&country_code='.$_POST['country_code'].'&photo='.$profileImage.'&transaction_pin='.$_POST['transection_pin'].'&password='.$_POST['password'].'&d_by='.$this->session->userdata('user_id');
			$method = 'POST';
			// echo "<pre>";
			// print_r($data); die;
			$result = $this->CallAPI($api, $data, $method);
			if ($result['response_code']== 200) 
			{
				$this->session->set_flashdata('success', $result['msg']);
                redirect('Member/MemberRegister/MemberList');
			}else{
				$this->session->set_flashdata('error', $result['msg']);
                redirect('Member/MemberRegister/MemberList');
			}
		}

		public function deleteMember()
		{
			$api = 'Member/deleteRegister';
			$data = 'member_id='.$_POST['member_id'].'&d_by='.$this->session->userdata('user_id');
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			print_r($result['response_code']);	
		}

		public function unblock_member()
		{
			$api = 'Member/blockUnblockedRegister';
			$data = 'member_id='.$_POST['member_id'].'&status='.'1'.'&d_by='.$this->session->userdata('user_id');
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			print_r($result['response_code']);	
		}

		public function block_member()
		{
			$api = 'Member/blockUnblockedRegister';
			$data = 'member_id='.$_POST['member_id'].'&status='.'0'.'&d_by='.$this->session->userdata('user_id');
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			print_r($result['response_code']);	
		}
	}
?>
