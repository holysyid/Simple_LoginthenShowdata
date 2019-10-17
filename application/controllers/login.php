<?php

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	function index(){

		$this->load->view('v_login');
	}

	function login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$where=array(
			'username'=>$username,
			'password'=>$password
		);

		$check=$this->m_login->lihatdb($where,'user')->num_rows();

		if($check==1){
			$data_session=array(
				'username'=>$username,
				'status'=>"login"
			);

			$this->session->set_userdata($data_session);
			$this->Data_diri();
		}

		else{
			echo "Username atau password salah.";
		}
	}

	function Data_diri(){
			if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
			}else{
			$where=array('username'=>$this->session->userdata('username'));
			$data['data']=$this->m_login->lihatdb($where,'data')->result();
			$this->load->view('tampildata',$data);
			}
		}
}
