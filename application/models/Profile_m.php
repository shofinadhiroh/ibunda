<?php

class Profile_m extends CI_Model {
    
    public function get_all()
    {
       return $this->db->get('user')->result();
    }
    
    public function check_account($email = '', $password = '')
    {
        return $this->db->get_where('user',
            array(
                'email' => $email,
                'password' => sha1($password)
            )
        )->row();
    }
    
    public function get_member_by_id($member_id)
    {
        return $this->db->get_where('user', array('id' => $user_id))->row();
    }
}