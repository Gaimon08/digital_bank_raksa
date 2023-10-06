<?php
class Deposito_m extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_deposito');
        if ($id != null) {
            $this->db->where('id_Deposito', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // Simpan data pengajuan kredit
    public function simpan_pengajuan_deposito($data) {
        return $this->db->insert('tb_deposito', $data);
    }

   // Hapus data pengajuan kredit berdasarkan ID
   public function hapus_pengajuan_deposito($id) {
    return $this->db->delete('tb_deposito', array('id_Deposito' => $id));
}
    
// Mendapatkan data pengajuan kredit berdasarkan ID
public function get_pengajuan_deposito_by_id($id) {
    $this->db->where('id_Deposito', $id);
    return $this->db->get('tb_deposito')->row(); 
}
// Menyimpan perubahan data pengajuan kredit
public function update_pengajuan_deposito($id, $data) {
    $this->db->where('id_Deposito', $id);
    return $this->db->update('tb_deposito', $data); 
}

}
