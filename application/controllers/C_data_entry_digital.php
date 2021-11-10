<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_data_entry_digital extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('models');
	}

	public function index()
	{
		$session_data['menu'] = [
			'entry_digital/entry_digital'
		];
		$this->load->view('page/v_screening_dua/v_home', $session_data);
	}
}