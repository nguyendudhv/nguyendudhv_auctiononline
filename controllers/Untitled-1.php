<?php 
	class U_D_I extends CI_Controler
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function delete()
		{
			$this->load->model("login_model");
			$this->login_model->delete_row();
			redirect("status/account_login");
		}
	}
?>