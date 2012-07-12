<?php 
    class Account extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }
        public  function Index()
        {
            
        }
        public function Login()
        {
            $this->load->view('login_form');
        }
        
        public function Login()
        {
            $this->load->model('account_model');
            $check_login=$this->account_model->check_login();
            if($check_login)
            {
                
            }
            else
            {
                
            }
        }
    }
?>