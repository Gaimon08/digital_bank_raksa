<?php
class Kredit_pegawai_m extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_kredit_pegawai');
        if ($id != null) {
            $this->db->where('id_kredit_pegawai', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // Simpan data pengajuan kredit
    public function simpan_pengajuan_kredit($data) {
        return $this->db->insert('tb_kredit_pegawai', $data);
    }

   // Hapus data pengajuan kredit berdasarkan ID
   public function hapus_pengajuan_kredit($id) {
    return $this->db->delete('tb_kredit_pegawai', array('id_kredit_pegawai' => $id));
}
    
// Mendapatkan data pengajuan kredit berdasarkan ID
public function get_pengajuan_kredit_by_id($id) {
    $this->db->where('id_kredit_pegawai', $id);
    return $this->db->get('tb_kredit_pegawai')->row(); 
}
// Menyimpan perubahan data pengajuan kredit
public function update_pengajuan_kredit($id, $data) {
    $this->db->where('id_kredit_pegawai', $id);
    return $this->db->update('tb_kredit_pegawai', $data); 
}

}
