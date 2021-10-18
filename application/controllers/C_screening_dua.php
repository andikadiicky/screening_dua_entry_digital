<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_screening_dua extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('models');
	}

	public function index()
	{
		$session_data['menu'] = [
			'screening_dua/screening_dua'
		];
		$this->load->view('page/v_screening_dua/v_home', $session_data);
	}

}