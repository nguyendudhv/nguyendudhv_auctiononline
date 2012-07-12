<?php 
	class Login extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function index()
		{
			$this->load->view("login_form");
		}
		public function singup()
		{
			$this->load->model("login_model");
			$query = $this->login_model->query();
			if($query)
			{
				$data = array(
					"username" => $this->input->post("username"),
					"is_login" => true,
				);
				$this->session->set_userdata($data);
				redirect("status/account_login");
			}
			else
			{
				$this->index();
			}
		}
		
	}
?>