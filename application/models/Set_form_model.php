<?php
/**
* 
*/
class Set_form_model extends CI_Model
{
	
	function __construct()
	{
		
		$this->load->database();
	}

	public function form_insert()
	

 {
    $this->load->helper('url');

    $data = array(
        $username => $this->input->post('username'),
        $email => $this->input->post('email'),
        $password => $this->input->post('password'),
        $myfile  => $this->input->post('myfile')
    );

   $this->db->insert('users', $data);
}
	
}
?>