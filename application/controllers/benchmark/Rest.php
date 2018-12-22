<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users');
	}

	/**
	 * Default controller entry point
	 */
	public function index()
	{
		$this->output
				->set_content_type('application/json')
				->set_output(json_encode($this->users->serialized()));
	}

}
