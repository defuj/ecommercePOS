<?php 

class User extends CI_Model
{
        
        // Get Data
        function getData($where)
        {
                return $this->db->get_where('user', ['email' => $where)->row_array();
        }
}

?>