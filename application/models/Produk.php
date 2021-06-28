<?php 

class Produk extends CI_Model
{
        
        // Read Data
        function findAll()
        {
                $this->db->select('dat_produk.*, dat_konversi_satuan.diskon, dat_konversi_satuan.harga_akhir, dat_konversi_satuan.tipe_diskon, dat_img_produk.nama_file');
                $this->db->from('dat_produk');
                $this->db->join('dat_konversi_satuan', 'dat_konversi_satuan.id = dat_produk.satuan_dasar');
                $this->db->join('dat_img_produk', 'dat_img_produk.id = dat_produk.id_cover_img ');
                $this->db->order_by('dat_produk.satuan_dasar', 'ASC');
                return $this->db->get();
        }

        function findLimit()
        {
                $this->db->select('dat_produk.*, dat_konversi_satuan.diskon, dat_konversi_satuan.harga_akhir, dat_konversi_satuan.tipe_diskon, dat_img_produk.nama_file');
                $this->db->from('dat_produk');
                $this->db->join('dat_konversi_satuan', 'dat_konversi_satuan.id = dat_produk.satuan_dasar');
                $this->db->join('dat_img_produk', 'dat_img_produk.id = dat_produk.id_cover_img ');
                $this->db->order_by('dat_produk.satuan_dasar', 'ASC');
                $this->db->order_by('nama_item', 'RANDOM');
                $this->db->limit(10);
                return $this->db->get();
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
                $this->db->select('dat_produk.*, dat_konversi_satuan.diskon, dat_konversi_satuan.harga_akhir, dat_konversi_satuan.tipe_diskon, dat_img_produk.nama_file');
                $this->db->from('dat_produk');
                $this->db->join('dat_konversi_satuan', 'dat_konversi_satuan.id = dat_produk.satuan_dasar');
                $this->db->join('dat_img_produk', 'dat_img_produk.id = dat_produk.id_cover_img ');
                $this->db->where('dat_produk.slug', $where);
                return $this->db->get();
        }

        function getDataImg($where) {
                return $this->db->get_where('dat_img_produk', ['id_produk' => $where]);
        }

        // Update Data
        function update($where, $data, $table){
                $this->db->where(array('kode_item' => $where));
                $this->db->update($table, $data);
        }

        // Get Produk (Cart)
        function findCart($kode){
                $result = $this->db->select('dat_produk.*, dat_konversi_satuan.diskon, dat_konversi_satuan.harga_akhir, dat_konversi_satuan.tipe_diskon, dat_img_produk.nama_file');
                $result = $this->db->from('dat_produk');
                $result = $this->db->join('dat_konversi_satuan', 'dat_konversi_satuan.id = dat_produk.satuan_dasar');
                $result = $this->db->join('dat_img_produk', 'dat_img_produk.id = dat_produk.id_cover_img ');
                $result = $this->db->where('dat_produk.kode_item', $kode);
                $result = $this->db->limit(1);
                $result = $this->db->get();

                if($result->num_rows() > 0){
                        return $result->row();
                }else{
                        return array();
                }
        }
}
 ?>