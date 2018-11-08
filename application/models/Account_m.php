<?php

class Account_m extends CI_Model {
     public function insert($data = array())
    {
        $this->db->insert('user', $data);
    }
}