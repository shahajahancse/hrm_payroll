<?php
include 'classes/BanglaConverter.php';

class Backend_Controller extends MY_Controller
{
	function __construct()
	{
		parent::__construct();

		// $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning"> <i class="fa fa-warning"></i> ', '</div>');
		// dd($this->session->all_userdata());
		$this->data['request_trainee_no'] = 0;
		// $this->data['request_trainer_no'] = 0;
		$this->data['request_training_application_no'] = 0;
		$this->data['request_staff_no'] = 0;
		$this->data['request_stor_no'] = 0;
		$this->data['Joint_director_no'] = 0;
		$this->data['director_general_no'] = 0;
		$this->data['pre_exam_notify'] = 0;
		$this->data['post_exam_notify'] = 0;
		$this->data['module_exam_notify'] = 0;
		$this->data['leave_notify'] = 0;
		$this->data['un_available_item_notify'] = 0;

		// exit('10');

		// Default Value
		$this->data['meta_title'] = 'ERP - Payroll';
		$this->data['domain_title'] = 'SMART HRM';
	}
}
