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
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('boekplaat');
		$this->load->view('footer');
	}

	public function boeken()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('boeken');
		$this->load->view('footer');
	}

	public function account()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('account');
		$this->load->view('footer');
	}

	public function contact()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->database();
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->database();
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function mijnAccount()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->database();
		$this->load->view('mijnAccount');
		$this->load->view('footer');
	}

	public function registreren()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->database();
		$this->load->view('registreren');
		$this->load->view('footer');
	}

}
