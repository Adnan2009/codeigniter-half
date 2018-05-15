<?php

class Admin extends MY_Controller {
	
	public function dashboard()
	{
		$this->load->model('Articlesmodels','articles');

		$articles = $this->Articlesmodels->articles_list();

		$this->load->view('admin/dashboard'['articles'=>$articles]);
	}
}