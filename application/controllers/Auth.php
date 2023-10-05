<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


	// ini adalah function load pertama
	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}


	public function lupa_password()
	{
		$this->load->view('lupa/lupa_password');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'userid' => $row->user_id,
					'level'  => $row->level

				);
				$this->session->set_userdata($params);
				$this->session->set_flashdata('success', 'Selamat Berhasil Login Administrator Gudang');
				redirect('dashboard');		
			} else {
				$this->session->set_flashdata('error', 'Password atau username Salah !!!');
				redirect('auth/login');
			}
		}
	}

	public function keluar()
	{
		$params = array(
			'userid',
			'level'
		);
		$this->session->unset_userdata($params);
		echo "<script> 
		alert('selamat berhasil keluar :)');
		window.location='" . site_url('auth/login') . "';
	</script>";
	}
}
