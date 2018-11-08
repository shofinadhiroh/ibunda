<?php

class Detail_article extends MY_Controller {
    
    public function index()
    {
        //$data['content'] = 'page/detail/detail';
        
        //$this->db->select("article.*, user.name");
        //$this->db->from('user');
        //$this->db->join('user', 'user.id = article.id_user');
        
        //$this->load->view('layout', $data);
        
    }
    
    public function detail()
    {
        $id = $this->uri->segment(3);
        
        $data['content'] = 'page/detail/detail';
        $data['comment'] = $this->detail_m->get_comments($id);
        $data['article'] = $this->detail_m->get_detail($id);
        
        $this->load->view('layout', $data);
    }

    
    public function create($id){
			$data['content'] = 'page/detail/detail';
            $data['article'] = $this->detail_m->get_detail($id);
			$this->form_validation->set_rules('comment', 'Comment', 'required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('layout', $data);
			} else {
				$this->detail_m->create_comment($id);
				redirect('detail_article/detail/'.$id);
			}
		}
    

}