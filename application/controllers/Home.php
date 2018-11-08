<?php

class Home extends MY_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('string', 'text'));
    }
    
    public function index()
    {
        $data['content'] = 'page/home/index';
        
        $this->db->select("article.*, user.name");
        $this->db->from('article');
        $this->db->join('user', 'user.id = article.id_user');
        $data['article'] = $this->db->get()->result();
        
        $this->load->view('layout', $data);
        
    }
    
    public function logout()
    {
        $this->session->unset_userdata(array('id', 'nama', 'email', 'is_login'));
        
        redirect(base_url());
    }
}