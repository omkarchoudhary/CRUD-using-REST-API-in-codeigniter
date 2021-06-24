<?php

defined('BASEPATH') or exit('No direct script access allowed');

class loginmodel extends CI_Model
{
    public function getRows($id)
    {
        if (!empty($id)) {
            //Also use get_where()
            $sql = $this->db->select()
                ->from('users')
                ->where(['id' => $id])
                ->get();
            return $sql->row_array();
        } else {
            $sql = $this->db->select()
                ->from('users')
                ->get();
            return $sql->result_array();
        }
    }
}
?>
