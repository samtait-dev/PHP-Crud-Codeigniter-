<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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





}
