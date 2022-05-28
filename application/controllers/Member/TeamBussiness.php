<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class TeamBussiness extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$d['v'] = "Member/teamBussiness";
			$this->load->view('templates',$d);
		}

		public function direct_member()
		{
			$api = 'Member/get_direct_member';
			$data = 'sponser_id='.$this->session->userdata('user_id');
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			$d['result'] = $result['data'];
			$t = $this->getTotalLeftRight($result['data']);
			$d['left'] = $t['left'];
			$d['right'] = $t['right'];
			$d['v'] = "Member/direct_member";
			$this->load->view('templates',$d);
		}

		function getTotalLeftRight($array)
		{
			$d['left'] = 0;
			$d['right'] = 0;
			if(!empty($array))
			{
				foreach($array as $key=>$value)
				{
					if($value['side']=='L')
					{
						$d['left']++;
					}elseif($value['side']=='R')
					{
						$d['right']++;
					}
				}
			}
			return $d;
		}


		public function GetTeamBussinessList()
		{
			$api = 'Package/get_team_business_list';
			$data = 'parent_id='.$this->input->post('member_id',true);
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
<<<<<<< Updated upstream
			
=======
			// $lrData = $this->getTotalLeftRight($result['data']);
			// $rsData['left'] = $lrData['left'];
			// $rsData['right'] = $lrData['right'];
			// $rsData['result'] = $result;
>>>>>>> Stashed changes
			echo json_encode($result);
		}	
	}
?>