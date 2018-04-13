<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard');
	}

    public function addPost(){

    	$userid = $this->session->userdata('userid');
    	if(!$userid){
    		return redirect('welcome');
    	}
    	$this->load->view('addPost');
    }

    public function publishPost(){
    	$config;
    }

}


?>