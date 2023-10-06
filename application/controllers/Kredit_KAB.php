<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kredit_KAB extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kredit_KAB_m');
        $this->load->library('form_validation');
    }

    public function index()
	{
		$data['row'] = $this->Kredit_KAB_m->get();
		$this->template->load('template' , 'kredit/kredit_KAB/data_KAB' , $data);
	}

    // Menampilkan form pengajuan kredit
    public function tambah() {
        $this->template->load('template' , 'kredit/kredit_KAB/KAB_add');
    }

    public function simpan() {
        // Load library form validation
        $this->load->library('form_validation');
    
        // Atur aturan validasi
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('No_KTP', 'Nomor KTP', 'required');
        $this->form_validation->set_rules('Nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('Jenis_Kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('Alamat', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('No_HP', 'Nomor Handphone', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('jenis_agunan', 'Jenis Agunan', 'required');
        $this->form_validation->set_rules('radio_group', 'Agunan Atas Nama', 'required');
        $this->form_validation->set_rules('jml_pinjaman', 'Jumlah Pinjaman', 'required');
        $this->form_validation->set_rules('lama_pinjaman', 'Lama Pinjaman', 'required');
        // Periksa apakah validasi berhasil
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman tambah dengan pesan error
            $this->template->load('template' , 'kredit/kredit_KAB/KAB_add');
        } else {
            // Jika validasi berhasil, lanjutkan dengan menyimpan data
            $data = array(
                'Email' => $this->input->post('Email'),
                'No_KTP' => $this->input->post('No_KTP'),
                'Nama_Lengkap' => $this->input->post('Nama'),
                'Jenis_Kelamin' => $this->input->post('Jenis_Kelamin'),
                'Alamat_Lengkap' => $this->input->post('Alamat'),
                'No_Handphone' => $this->input->post('No_HP'),
                'Pekerjaan' => $this->input->post('pekerjaan'),
                'Jenis_Agunan' => $this->input->post('jenis_agunan'),
                'Agunan_Atas_Nama' => $this->input->post('radio_group'),
                'Jumlah_Pinjaman' => str_replace(['Rp ', '.'], '', $this->input->post('jml_pinjaman')),
                'Lama_Pinjaman' => $this->input->post('lama_pinjaman')
            );
    
            // Panggil model untuk menyimpan data
            $result = $this->Kredit_KAB_m->simpan_pengajuan_kredit($data);
    
            if ($result) {
                // Jika berhasil disimpan, Anda dapat mengarahkan pengguna ke halaman lain atau menampilkan pesan sukses
                $this->session->set_flashdata('success','Data pengajuan kredit Berhasil disimpan.');
                redirect('kredit/KAB');
            } else {
                // Jika gagal, Anda dapat menampilkan pesan error atau mengarahkan pengguna ke halaman lain
                $this->session->set_flashdata('danger','Gagal menyimpan data pengajuan kredit.');
                redirect('kredit/KAB');
            }
        }
    }
    

   // Menampilkan form edit pengajuan kredit
public function edit($id) {
    $data['pengajuan_kredit'] = $this->Kredit_KAB_m->get_pengajuan_kredit_by_id($id);
    $this->template->load('template' , 'kredit/kredit_KAB/KAB_edit',$data);
}

// Menyimpan perubahan data pengajuan kredit
public function update() {
    $id = $this->input->post('id_KAB'); // Ambil ID pengajuan kredit dari form

    // Load library form validation
    $this->load->library('form_validation');

    // Atur aturan validasi
    $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('No_KTP', 'Nomor KTP', 'required');
    $this->form_validation->set_rules('Nama', 'Nama Lengkap', 'required');
    $this->form_validation->set_rules('Jenis_Kelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('Alamat', 'Alamat Lengkap', 'required');
    $this->form_validation->set_rules('No_HP', 'Nomor Handphone', 'required');
    $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
    $this->form_validation->set_rules('jenis_agunan', 'Jenis Agunan', 'required');
    $this->form_validation->set_rules('radio_group', 'Agunan Atas Nama', 'required');
    $this->form_validation->set_rules('jml_pinjaman', 'Jumlah Pinjaman', 'required');
    $this->form_validation->set_rules('lama_pinjaman', 'Lama Pinjaman', 'required');

    // Periksa apakah validasi berhasil
    if ($this->form_validation->run() == FALSE) {
        // Jika validasi gagal, kembali ke halaman edit dengan pesan error
        $data['pengajuan_kredit'] = $this->Kredit_KAB_m->get_pengajuan_kredit_by_id($id);
        $this->template->load('template', 'kredit/kredit_KAB/KAB_edit', $data);
    } else {
        // Jika validasi berhasil, lanjutkan dengan menyimpan perubahan data
        $data = array(
            'Email' => $this->input->post('Email'),
            'No_KTP' => $this->input->post('No_KTP'),
            'Nama_Lengkap' => $this->input->post('Nama'),
            'Jenis_Kelamin' => $this->input->post('Jenis_Kelamin'),
            'Alamat_Lengkap' => $this->input->post('Alamat'),
            'No_Handphone' => $this->input->post('No_HP'),
            'Pekerjaan' => $this->input->post('pekerjaan'),
            'Jenis_Agunan' => $this->input->post('jenis_agunan'),
            'Agunan_Atas_Nama' => $this->input->post('radio_group'),
            'Jumlah_Pinjaman' => str_replace(['Rp ', '.'], '', $this->input->post('jml_pinjaman')),
            'Lama_Pinjaman' => $this->input->post('lama_pinjaman')
        );

        // Panggil model untuk menyimpan perubahan data
        $result = $this->Kredit_KAB_m->update_pengajuan_kredit($id, $data);

        if ($result) {
            // Jika berhasil disimpan, Anda dapat mengarahkan pengguna ke halaman lain atau menampilkan pesan sukses
            $this->session->set_flashdata('success','Data pengajuan kredit Berhasil diperbarui.');
            redirect('kredit/KAB');
        } else {
            // Jika gagal, Anda dapat menampilkan pesan error atau mengarahkan pengguna kembali ke halaman edit
            $this->session->set_flashdata('danger','Gagal memperbarui data pengajuan kredit.');
            redirect('kredit/edit/' . $id);
        }
    }
}



     // Hapus data pengajuan kredit berdasarkan ID
     public function hapus($id) {
        $result = $this->Kredit_KAB_m->hapus_pengajuan_kredit($id);

        if ($result) {
            // Jika berhasil dihapus, set flash message
            $this->session->set_flashdata('success', 'Data pengajuan kredit berhasil dihapus.');
            redirect('kredit/KAB');
        } else {
            // Jika gagal, set flash message
            $this->session->set_flashdata('danger', 'Gagal menghapus data pengajuan kredit.');
            redirect('kredit/gagal_hapus');
        }
    }


}
