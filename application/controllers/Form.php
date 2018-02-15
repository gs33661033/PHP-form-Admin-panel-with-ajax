<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

 
                $this->form_validation->set_rules('username', 'Username', 'required');

                $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'You must provide a %s.'
                        )
                );
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('myfile','Photo Upload','required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('folder/myform');
                }
                else
                {
                        
                        $this->load->model('set_form_model');
                        $this->load->view('folder/formsuccess');
                }
        }

}
?>


                

