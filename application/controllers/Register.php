<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
	    $this->load->helper('url');
	    $this->load->model('Register_model'); 
        $this->load->library('form_validation');
       
       
    }
    
    public function index()
    {
        if(isset($_POST['register'])){
            $this->form_validation->set_rules('name','name','required');
            $this->form_validation->set_rules('email','email','required');
            $this->form_validation->set_rules('phone','phone','required');
            $this->form_validation->set_rules('password','password','required');
            if($this->form_validation->run()==TRUE){
                //echo 'form validated';
                $data =array(
                    'name'=>$_POST['name'],
                    'email'=>$_POST['email'],
                    'phone'=>$_POST['phone'],
                    'password'=>$_POST['password'],
                );
          $this->db->insert('ragister_table',$data);
          $this->session->set_flashdata("success","your account has been register successfully now you can login ");
          redirect("register/login",refresh);
            }
        }

            $this->load->view('register/registeration');
         
          
     }
     public function login()
    {
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('password','password','required');
        if($this->form_validation->run()==TRUE) {
            $this->db->select('*');
            $this->db->from('ragister');
            $this->db->where(array('email'=>$email,'password'=>$password));
            $query =$query->db->get();
            $user=$query->row();
            if($user->email){
                $this->session->set_flashdata("success","you are logged in");

                $_SESSION['user_logged']=TRUE;
                $_SESSION['EMAIL']=$user->email;

                redirect("user/dashboard","refresh");
            }else{

         $this->session->set_flashdata("error","no such account exit in database ");
         redirect("register/login","refresh");
            }
        }

        $this->load->view('register/login');
    }
    }
     ?>