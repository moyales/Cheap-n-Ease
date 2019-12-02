<?php

class Membership_model extends CI_Model {

    /*
   function __construct()
    {
          parent::__construct();
    }
    */

    function validate()
    {

        $sql = "SELECT * FROM cne.membership WHERE username = '" . $this->input->post('username') . "'" . " AND password = '" . md5($this->input->post('password')) . "'";
        
        $query = $this->db->query($sql);
        
        if($query->num_rows() == 1)
        {
            return true;
        }
        
    }
    
    function create_member()
    {
        
        $new_member_insert_data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email_address' => $this->input->post('email_address'),         
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))                       
        );
        
        $insert = $this->db->insert('membership', $new_member_insert_data);
        return $insert;
    }
}