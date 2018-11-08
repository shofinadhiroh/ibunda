<?php

class Account extends MY_Controller {
    
    public function index()
    {
        $data['content'] = 'page/account/login';
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout', $data);
        }
        else
        {
            //proses login
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            //dapatkan data berdasarkan email dan password
            $user = $this->profile_m->check_account($email, $password);

            //mengecek apakah email dan password ada
            if($user)
            {
                //buat session
                $data_sess = array(
                    'id' => $user->id,
                    'email' => $user->email,
                    'name' => $user->name,
                    'member_since' => $user->member_since,
                    'profile_photo' => $user->profile_photo,
                    'bio' => $user->bio,
                    'is_login' => TRUE
                );
                
                $this->session->set_userdata($data_sess);;
                redirect('home');
            }
            else
            {
                //buat pesan gagal login
                $this->session->set_flashdata('failed', 'Akun anda salah, silahkan coba lagi.');
                
                redirect('account');
            }
        }
    }
    
    public function signup()
    {   
         $data['content'] = 'page/account/register';
         $this->form_validation->set_rules('name','Nama Lengkap', 'required');
         $this->form_validation->set_rules('email','Email', 'required|valid_email|is_unique[user.email]');
         $this->form_validation->set_rules('password','Password', 'required|min_length[8]');
          if($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout', $data);
        }
        else
        {
            
            $this->account_m->insert(
                array(
                    'name'              =>$this->input->post('name'),
                    'email'             =>$this->input->post('email'),
                    'password'          =>SHA1($this->input->post('password'))
                )
            );
            
            redirect('account');
        }
    }

    
}