<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data['title'] = "Main Page";
		$this->load->view('pages/prime', $data);
	}

	public function fam()
	{
		$data['title'] = 'Family Insertion';
		$this->load->view('admin/family-insert', $data);
	}

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */