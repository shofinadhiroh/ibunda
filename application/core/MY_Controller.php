<?php

class MY_Controller extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('profile_m','submission_m','home_m','detail_m', 'account_m'));
    }
}