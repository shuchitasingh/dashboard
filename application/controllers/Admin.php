<?php
class Admin extends CI_Controller{
  
    
  
        
            public function dashboard()
            {
                $this->load->view('header'); 
                 $this->load->view('footer'); 
                 $this->load->view('register/dashboard');
        }
       
            public function Examlist()
            {
            $this->load->view('register/Examlist');
           
        }
            
            public function Subject()
            {
            $this->load->view('register/subject');
        }

            public function Result()
            {
            $this->load->view('register/result');
        }

            public function Leaderboad()
            {
            $this->load->view('register/leaderboad');
         }

            public function Activity()
            {
            $this->load->view('register/activity');
        }

            public function Students()
            {
            $this->load->view('register/students');
        }

            public function Message()
            {
            $this->load->view('register/message');
         }

            public function Fvrts()
            {
            $this->load->view('register/fvrts');
            }
}




?>