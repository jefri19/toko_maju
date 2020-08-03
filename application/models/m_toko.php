<?php

class M_toko extends CI_Model{
    public function tampilData()
    {
       return $this->db->get('tb_barang')->result_array();
    }

    public function inputData($data)
    {
       return $this->db->insert('tb_barang', $data);
    }
    
    public function getData($id)
    {
       $where = [
           'id'  => $id
       ];
       return $this->db->get_where('tb_barang', $where );
    }

    public function updateBarang($id, $data)
    {
      $this->db->where('id', $id);
      return $this->db->update('tb_barang',  $data);
    }
    
    public function hapusData($id)
    {
      $this->db->where('id', $id);
      return $this->db->delete('tb_barang');
       
    }

    public function detailBarang($id = NULL){
      $query = $this->db->get_where('tb_barang', array('id' => $id))->row();
      return $query;
    }
}
