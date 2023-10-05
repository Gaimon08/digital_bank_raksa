<?php
class Kredit_KAB_m extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_kredit_kab');
        if ($id != null) {
            $this->db->where('id_KAB', $id);
        }
        $query = $this->db->get();
        return $query;
    }

   // Simpan data pengajuan kredit
   public function simpan_pengajuan_kredit($data) {
    return $this->db->insert('tb_kredit_kab', $data);
}

    
// Mendapatkan data pengajuan kredit berdasarkan ID
public function get_pengajuan_kredit_by_id($id) {
    $this->db->where('id_KAB', $id);
    return $this->db->get('tb_kredit_kab')->row(); 
}
// Menyimpan perubahan data pengajuan kredit
public function update_pengajuan_kredit($id, $data) {
    $this->db->where('id_KAB', $id);
    return $this->db->update('tb_kredit_kab', $data); 
}

  // Hapus data pengajuan kredit berdasarkan ID
  public function hapus_pengajuan_kredit($id) {
    return $this->db->delete('tb_kredit_kab', array('id_KAB' => $id));
}

}
