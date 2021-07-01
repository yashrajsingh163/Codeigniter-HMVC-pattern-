<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_crud');
		$d = $this->admin_crud->index();
		print_r($d);
		echo "kbkb noinio";
	}
}
