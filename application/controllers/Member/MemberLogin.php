<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class MemberLogin extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$this->load->view("Member/memberLogin");
		}

		public function doLogin()
		{
			$api = 'Login/login_member';
			$data = 'member_id='.$_POST['mbr_username'].'&password='.$_POST['mbr_password'];
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			
			if ($result['response_code'] == 200) 
			{
				if (isset($result['data']['userData']['role_type']) == 2) 
				{
					$logged_in_sess = array(
                        'user_id' => $result['data']['userData']['user_id'],
                        'name' => $result['data']['userData']['name'],
                        'role_type' => $result['data']['userData']['role_type'],
                        'gender' => $result['data']['userData']['gender'],
                        'logged_in' => TRUE
                    );

                    $this->session->set_userdata($logged_in_sess);
                    redirect('Member/Dashboard','refresh');
				}
				else
				{
					$this->session->set_flashdata('error', $result['msg']);
                	redirect('Member/MemberLogin');
				}
			}
			else
			{
				$this->session->set_flashdata('error', $result['msg']);
                redirect('Member/MemberLogin');
			}
		}

		public function logout()
		{
			$this->session->sess_destroy(); 
        	redirect('Member/MemberLogin', 'refresh');
		}
	}
?>