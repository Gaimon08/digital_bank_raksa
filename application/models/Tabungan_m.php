<?php
class Tabungan_m extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_tabungan');
        if ($id != null) {
            $this->db->where('id_tabungan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // Simpan data pengajuan kredit
    public function simpan_pengajuan_tabungan($data) {
        return $this->db->insert('tb_tabungan', $data);
    }

   // Hapus data pengajuan kredit berdasarkan ID
   public function hapus_pengajuan_tabungan($id) {
    return $this->db->delete('tb_tabungan', array('id_tabungan' => $id));
}
    
// Mendapatkan data pengajuan kredit berdasarkan ID
public function get_pengajuan_tabungan_by_id($id) {
    $this->db->where('id_tabungan', $id);
    return $this->db->get('tb_tabungan')->row(); 
}
// Menyimpan perubahan data pengajuan kredit
public function update_pengajuan_tabungan($id, $data) {
    $this->db->where('id_tabungan', $id);
    return $this->db->update('tb_tabungan', $data); 
}

}
