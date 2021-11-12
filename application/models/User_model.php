<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
     
  
        public function __construct(){
            parent :: __construct();
              $this->load->database();
          }
      
    
          public function checkUser($email,$password){
            /*print_r($email);
            print_r($password);
            exit;*/
            $this->db->select('*');
            $this->db->from("users");
            $this->db->where('email',$email);
            $this->db->where('password',$password);
            $query = $this->db->get();
            return $query->result_array();
          }
}
?>