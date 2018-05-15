<?php


class Loginmodel extends CI_Model{

	public function Login_valid( $username, $password)
	{
		$q = $this->db->where(['uname'=>$username,'pword'=>$password])
		                ->get('users');


		                if ($q->num_rows()  ) {

		                	return $q->row()->id;

		                	//return TRUE;

		                }

		                else{
		                	return FALSE;
		                }


	}
}
