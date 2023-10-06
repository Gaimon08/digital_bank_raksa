<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabungan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Tabungan_m');
        $this->load->library('form_validation');
    }

    public function index()
	{
		$data['row'] = $this->Tabungan_m->get();
		$this->template->load('template' , 'tabungan/data_tabungan' , $data);
	}

    // Menampilkan form pengajuan kredit
    public function tambah() {
        $this->template->load('template' , 'tabungan/tabungan_add');
    }

    public function simpan() {
        // Load library form validation
        $this->load->library('form_validation');
    
        // Atur aturan validasi
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('Nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('No_KTP', 'Nomor KTP', 'required');
        $this->form_validation->set_rules('Jenis_Kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('Alamat', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('No_HP', 'Nomor Handphone', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('Jenis_Tabungan', 'Jenis Tabungan', 'required');
        $this->form_validation->set_rules('Tabungan_Awal', 'Tabungan Awal', 'required');
    
        // Periksa apakah validasi berhasil
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman tambah dengan pesan error
            $this->template->load('template' , 'tabungan/tabungan_add');
        } else {
            // Jika validasi berhasil, lanjutkan dengan menyimpan data
            $data = array(
                'Email' => $this->input->post('Email'),
                'Nama_Lengkap' => $this->input->post('Nama'),
                'No_KTP' => $this->input->post('No_KTP'),
                'Jenis_Kelamin' => $this->input->post('Jenis_Kelamin'),
                'Alamat_Lengkap' => $this->input->post('Alamat'),
                'No_Handphone' => $this->input->post('No_HP'),
                'Pekerjaan' => $this->input->post('pekerjaan'),
                'Jenis_Tabungan' =>  $this->input->post('Jenis_Tabungan'),
                'Tabungan_Awal' => str_replace(['Rp ', '.'], '', $this->input->post('Tabungan_Awal'))
            );
    
            // Panggil model untuk menyimpan data
            $result = $this->Tabungan_m->simpan_pengajuan_tabungan($data);
    
            if ($result) {
                // Jika berhasil disimpan, Anda dapat mengarahkan pengguna ke halaman lain atau menampilkan pesan sukses
                $this->session->set_flashdata('success','Data Tabungan Berhasil disimpan.');
                redirect('tabungan');
            } else {
                // Jika gagal, Anda dapat menampilkan pesan error atau mengarahkan pengguna ke halaman lain
                $this->session->set_flashdata('danger','Gagal menyimpan data Tabungan.');
                redirect('tabungan');
            }
        }
    }
    

   // Menampilkan form edit pengajuan kredit
public function edit($id) {
    $data['pengajuan_tabungan'] = $this->Tabungan_m->get_pengajuan_tabungan_by_id($id);
    $this->template->load('template' , 'tabungan/tabungan_edit',$data);
}

// Menyimpan perubahan data pengajuan kredit
public function update() {
    $id = $this->input->post('id_tabungan'); // Ambil ID pengajuan kredit dari form

    // Load library form validation
    $this->load->library('form_validation');

    // Atur aturan validasi
    $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('Nama', 'Nama Lengkap', 'required');
    $this->form_validation->set_rules('No_KTP', 'Nomor KTP', 'required');
    $this->form_validation->set_rules('Jenis_Kelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('Alamat', 'Alamat Lengkap', 'required');
    $this->form_validation->set_rules('No_HP', 'Nomor Handphone', 'required');
    $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
    $this->form_validation->set_rules('Jenis_Tabungan', 'Jenis Tabungan', 'required');
    $this->form_validation->set_rules('Tabungan_Awal', 'Tabungan Awal', 'required');

    // Periksa apakah validasi berhasil
    if ($this->form_validation->run() == FALSE) {
        // Jika validasi gagal, kembali ke halaman edit dengan pesan error
        $data['pengajuan_kredit'] = $this->Tabungan_m->get_pengajuan_tabungan_by_id($id);
        $this->template->load('template', 'tabungan/tabungan_edit', $data);
    } else {
        // Jika validasi berhasil, lanjutkan dengan menyimpan perubahan data
        $data = array(
            'Email' => $this->input->post('Email'),
            'Nama_Lengkap' => $this->input->post('Nama'),
            'No_KTP' => $this->input->post('No_KTP'),
            'Jenis_Kelamin' => $this->input->post('Jenis_Kelamin'),
            'Alamat_Lengkap' => $this->input->post('Alamat'),
            'No_Handphone' => $this->input->post('No_HP'),
            'Pekerjaan' => $this->input->post('pekerjaan'),
            'Jenis_Tabungan' =>  $this->input->post('Jenis_Tabungan'),
            'Tabungan_Awal' => str_replace(['Rp ', '.'], '', $this->input->post('Tabungan_Awal'))
        );

        // Panggil model untuk menyimpan perubahan data
        $result = $this->Tabungan_m->update_pengajuan_tabungan($id, $data);

        if ($result) {
            // Jika berhasil disimpan, Anda dapat mengarahkan pengguna ke halaman lain atau menampilkan pesan sukses
            $this->session->set_flashdata('success','Data Tabungan Berhasil diperbarui.');
            redirect('tabungan');
        } else {
            // Jika gagal, Anda dapat menampilkan pesan error atau mengarahkan pengguna kembali ke halaman edit
            $this->session->set_flashdata('danger','Gagal memperbarui data Tabungan.');
            redirect('tabungan/edit/' . $id);
        }
    }
}



     // Hapus data pengajuan kredit berdasarkan ID
     public function hapus($id) {
        $result = $this->Tabungan_m->hapus_pengajuan_tabungan($id);

        if ($result) {
            // Jika berhasil dihapus, set flash message
            $this->session->set_flashdata('success', 'Data Tabungan berhasil dihapus.');
            redirect('tabungan');
        } else {
            // Jika gagal, set flash message
            $this->session->set_flashdata('danger', 'Gagal Tabungan data Deposito.');
            redirect('tabungan');
        }
    }

}
