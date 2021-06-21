<?php 

class Produk extends CI_Model
{
        
        // Read Data
        function findAll()
        {
                return $this->db->get('dat_produk');
        }

        function findLimit()
        {
                return $this->db->get('dat_produk', 10);
        }

        // Insert Data
        function insert($data, $table){
                return $this->db->insert($table, $data);
        }

        // Delete Data
        function delete($where, $table){
                $this->db->where(array('kode_item' => $where));
                $this->db->delete($table);
        }

        // Edit Data
        function getData($where, $table){
                return $this->db->get_where($table, array('slug' => $where));
        }

        // Update Data
        function update($where, $data, $table){
                $this->db->where(array('kode_item' => $where));
                $this->db->update($table, $data);
        }

        // Get Produk (Cart)
        function findCart($kode){
                $result = $this->db->where('kode_item', $kode)->limit(1)->get('dat_produk');
                if($result->num_rows() > 0){
                        return $result->row();
                }else{
                        return array();
                }
        }
}
 ?>