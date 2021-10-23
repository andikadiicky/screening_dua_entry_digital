<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_screening_dua_api extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('models');
	}

}