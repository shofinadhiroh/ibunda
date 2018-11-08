<?php

class Detail_m extends CI_Model {
    
    public function get_all()
    {
       return $this->db->get('article')->result();
    }
    
    public function get_detail($id = NULL)
    {
        $this->db->select("article.*, user.name, user.profile_photo, user.bio");
        //$this->db->from('users as user');
        $this->db->join('user', 'user.id = article.id_user');
          
        return $this->db->get_where('article', array('article.id' => (int)$id))->row();        
    }
    
    public function create_comment($id){
			$data = array(
				'id_article' => $id,
				'id_user' => $this->session->userdata('id'),
				'comment' => $this->input->post('comment')
			);
			return $this->db->insert('comment', $data);
		}
		public function get_comments($id)
        {
            $this->db->select("comment.*, user.name");
            //$this->db->from('users as user');
            $this->db->join('user', 'user.id = comment.id_user');
			$query = $this->db->get_where('comment', array('id_article' => $id));
			return $query->result_array();
		}
    
		
        
}