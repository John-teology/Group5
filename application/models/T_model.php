<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T_model extends CI_Model{


     function login_validation($username,$password)
    {
        $this->db->where("username",$username);
        $this->db->where("password",$password);
        if($this->db->get("user")->num_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function register_credentials($data)
    {
        return $this->db->insert("user",$data);
    }   
    


}
?>