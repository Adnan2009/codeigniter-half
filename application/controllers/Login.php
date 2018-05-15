<?php

class Login extends MY_Controller {

	public function index()
	{
		$this->load->helper('form');
		$this->load->view('public/admin_login');
	}

	public function admin_login()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','User Name','required|alpha|trim');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

		if($this->form_validation->run())                             // if validation is correctly run
		{

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$this->load->model('Loginmodel');

			$login_id = $this->Loginmodel->Login_valid($username,$password);

          if($login_id){
          	$this->load->library('session');
          	$this->session->get_userdata('userid',$login_id);
          	return redirect('admin/dashboard');

          	//echo "password match";
          }

          else{

          	echo "password not match";
          }



			}
			
			else
			 {
				$this->load->view('public/admin_login');    //  if validation is wrong then it redirect admin login page

				
			
		}
	}
}
     

