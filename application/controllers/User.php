<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {



	function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
    }

	public function index()
	{
		$data['row'] = $this->user_m->get();
		$this->template->load('template' , 'user/data_user' , $data);
	}
}
