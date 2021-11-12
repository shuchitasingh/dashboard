<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('User_model');
    }
    
    public function index()
    {
        if($this->session->userdata('userLoggedIn') == 1){
			redirect('user/dashboard');
		}else{
           
            $this->load->view('user/login');
          
     }
 function login(){
		if($this->session->userdata('userLoggedIn') == 1){
			redirect('user/dashboard');
		}else{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$data = $this->User_model->checkUser($email,$password);
				if(count($data) > 0){
					$this->session->set_userdata('userLoggedIn',1);
					$this->session->set_userdata('userData',$data);
					redirect('user/dashboard');
				}else{
					$error = $email;
					$this->session->set_flashdata('error',$error);
					redirect('user/index');
				}
		    }
	}
  function logout()
	{
		$this->session->sess_destroy();
		redirect('user/index');
	}
  function dashboard()
	{
		$this->load->view('user/dashboard');
		
		}
    }

}

?>