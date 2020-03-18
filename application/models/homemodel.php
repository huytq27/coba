<?php

class homemodel extends CI_Model{
    public function getData(){
        $query = $this->db->get('sanpham');
        return $query->result();
    }
}
?>
