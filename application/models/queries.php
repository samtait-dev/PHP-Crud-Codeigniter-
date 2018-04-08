<?php

class Queries extends CI_Model {

	public function register($data) {
		return $this->db->insert('tbl_users', $data);

	}


	public function login($email,$password) {
		$query = $this->db->where(['email'=>$email, 'password' => $password])
		                 ->get('tbl_users');

		if ($query ->num_rows() > 0){
			return $query->row();


		}

	}




}



?>
