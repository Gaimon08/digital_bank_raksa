<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan_nasabah extends CI_Controller {



	function __construct()
    {
        parent::__construct();
        $this->load->model('pengaduan_m');
    }

	public function index()
	{
		$data['row'] = $this->pengaduan_m->get();
		$this->template->load('template' , 'pengaduan/data_pengaduan_nasabah' , $data);
	}
}
