<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Geonology extends MY_Controller
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$d['v'] = "Admin/geonology";
			$this->load->view('templates',$d);
		}	

		public function getGenologyData()
		{
			$parent_id = $this->input->post('parent_id',true)!=''?$this->input->post('parent_id',true):$this->session->userdata('user_id');
			$api = 'Package/get_genology';
			$data = 'parent_id='.$parent_id;
			$method = 'POST';
			$result = $this->CallAPI($api, $data, $method);
			echo json_encode($result,true);
		}
	}
?>