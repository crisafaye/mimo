<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mimo extends CI_Controller {

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
		$headerdata['title'] = "MimO | Music Hall";
		$this->load->view('include/header',$headerdata);
		$this->load->view('mimo_v/musichall');
		$this->load->view('include/footer');
	}
	
	public function settings()
	{
		$headerdata['title'] = "MimO | Settings";
		$this->load->view('include/header',$headerdata);
		$this->load->view('mimo_v/settings');
		$this->load->view('include/footer');
		
	}
	
	
}
