<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index()
	{
		$this->load->view('layouts/dashboard/header');
		$this->load->view('layouts/dashboard/sidebar');
		$this->load->view('pages/dashboard/home');
		$this->load->view('layouts/dashboard/footer');
	}

// 	public function register()
// 	{
// 		$this->load->view('pages/auth/register');
// 	}
}
