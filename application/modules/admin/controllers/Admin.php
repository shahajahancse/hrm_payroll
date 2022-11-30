<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Backend_Controller {

	public function __construct(){
      parent::__construct();
    }

	public function index()
	{
		$this->data['subview'] = 'home';
		$this->load->view('backend/_layout_main', $this->data);	
	}
}
