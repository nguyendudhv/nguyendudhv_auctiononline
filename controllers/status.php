<?php 
	class Status extends CI_controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->is_login();
		}
		public function account_login()
		{
			$this->load->model("login_model");
			$q["data"] = $this->login_model->admin_model();
			$this->load->view("login_successful",$q);
		}
		public function is_login()
		{
			$is_login = $this->session->userdata("is_login");
			if(!isset($is_login) || $is_login != true)
			{
				echo "Đăng nhập lại! <a href = '../login'>Login</a>";
				die();
			}
		}
		public function delete()
		{
			$this->load->model("login_model");
			$this->login_model->delete_row();
			redirect("status/account_login");
		}
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$full_name = $this->input->post("full_name");
		$date_of_birth = $this->input->post("date_of_birth");
		$sex = $this->input->post("sex");
		$email = $this->input->post("email");
		$is_admin = $this->input->post("is_admin");
		$status = $this->input->post("status");
		$create_date = $this->input->post("create_date");
		$created_by = $this->input->post("create_by");
		$is_login = $this->input->post("is_login");
		$last_access = $this->input->post("last_access");
		$login_false = $this->input->post("login_false");
		public function update($username,$password,$full_name,$date_of_birth,$sex,$email,$is_admin,$status,$create_date,$created_by,$is_login,$last_access,$login_false)
		{
			$this->load->model("login_model");
			$q = $this->login_model->update_row();
			$this->load->view("update_view",$q);
		}
	}
?>