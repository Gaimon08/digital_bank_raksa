<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_pengaduan_nasabah');
        if ($id != null) {
            $this->db->where('id_pengaduan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

}

?>