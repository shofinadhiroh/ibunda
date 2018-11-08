<?php

class Submission extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        $this->session->userdata('is_login') == TRUE || redirect(base_url());
    }
    
    public function index()
    {
        $data['content'] = 'page/profile/submission';
        $data['user'] = $this->profile_m->get_all();
        $data['article'] = $this->submission_m->get_all();
        
        $this->load->view('layout', $data);
    }
    
    
    public function insert()
    {
        $data['content'] = 'page/profile/insert';
        $data['user'] = $this->profile_m->get_all();
        
        $this->form_validation->set_rules('stage','Tingkat', 'required');
        $this->form_validation->set_rules('topic','Kategori', 'required');
        $this->form_validation->set_rules('title','Judul', 'required');
        $this->form_validation->set_rules('picture','Gambar', 'required');
        $this->form_validation->set_rules('content','Artikel', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout', $data);
        }
        else
        {
            $id = $this->session->userdata('id');
            
            $this->submission_m->insert(
                array(
                    'stage'          =>$this->input->post('stage'),
                    'topic'              =>$this->input->post('topic'),
                    'title'          =>$this->input->post('title'),
                    'picture'           =>$this->input->post('picture'),
                    'content'            =>$this->input->post('content'),
                    'id_user'           =>$id,
                    
                )
            );
            
          redirect('submission');  
        }
    }
    
    public function remove_article()
    {
        $id = $this->uri->segment(3);
        
        $this->submission_m->delete_article($id);
        
        redirect('submission');
    }
    
    public function edit($id)
    {
        $id = $this->uri->segment(3);
        $data['article_detail'] = $this->submission_m->get_detail($id);
        $data['user'] = $this->profile_m->get_all();
        $data['content'] = 'page/profile/edit';
        //validasi form
        $this->form_validation->set_rules('stage','Tingkat', 'required');
        $this->form_validation->set_rules('topic','Kategori', 'required');
        $this->form_validation->set_rules('title','Judul', 'required');
        $this->form_validation->set_rules('picture','Gambar', 'required');
        $this->form_validation->set_rules('content','Artikel', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout', $data);
        }
        else
        {
            if(isset($_POST['update']))
            {
                //tampung data artikel
                $data_article = array(
                    'stage'          =>$this->input->post('stage'),
                    'topic'              =>$this->input->post('topic'),
                    'title'          =>$this->input->post('title'),
                    'picture'           =>$this->input->post('picture'),
                    'content'            =>$this->input->post('content'),
                    
                );
                
                $id_article = $this->submission_m->get_detail('id');
                
                //panggil model artikel
                $this->submission_m->update($data_article, $id);
                
                //redirect
                redirect('submission');
            }
        }
    }
}