<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Generator extends CI_Controller {

	/**
	 * Generate forms
	 */
	// default page
	public function index()
	{
		$this->load->view('generate');
	}

}
