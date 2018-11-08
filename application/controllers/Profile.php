<?php

class Profile extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        $this->session->userdata('is_login') == TRUE || redirect(base_url());
    }
    
    public function index()
    {
        $data['content'] = 'page/profile/profile';
        $data['user'] = $this->profile_m->get_all();
        
        $this->load->view('layout', $data);
    }
}