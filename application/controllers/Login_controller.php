<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

        
                
                $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[users.username]');

                $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|',
                        array('required' => 'You must provide a %s.',
                        'is_unique'     => 'This %s already exists.')
                );

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('folder/login');
                }
                else
                {
                        $this->load->view('folder/formsuccess');
                }
        }

}
?>


                

