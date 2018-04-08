<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}




	public function signup()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('mobile','Mobile','required');

		if($this->form_validation-> run()){
			echo 'Success Validation passed';
			$this->load->model('queries');
			$data = $this ->input->post();
			unset($data['submit']);

			if($this->queries->register($data)){
				$this->session->set_flashdata ('response', 'Registered Succesfully');

			}
			else{
				$this->session->set_flashdata ('response', 'Registration failed');

			}


			return redirect ('welcome');


		}
		else{
			return $this->index();

		}
	}





	public function signin(){
		$this->form_validation->set_rules('email','Email','required');
    	$this->form_validation->set_rules('password','Password','required');

    	if($this->form_validation-> run()){
    		$this->load->model('queries');
			$email = $this ->input->post('email');
			$password = $this ->input->post('password');
			$user = $this->queries->login($email,$password);

			//echo details of user found.
			//echo '<pre>';
			//print_r($user);
			//echo '</pre>';
			//exit();

			if ($user) {
				$session_data = array('userid' => $user ->user_id,
									  'username' => $user ->username,
									  'email' => $user ->email,
									  'mobile' => $user ->mobile,
									  'user_role_id' => $user ->user_role_id,
				 );
				
			$this->session->set_userdata($session_data);	
			return redirect ('dashboard');

			}
			else{
			return redirect ('Welcome');

			}
    	}

    	else{
    		$this->load->view(welcome_message);

    	}

	}




}
