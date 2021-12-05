<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T_model extends CI_Model{


     function login_validation($username,$password)
    {
       
        $this->db->where("username",$username);
        if($this->db->get("user")->num_rows() > 0)
        {
            $this->db->select("password");
            $this->db->where("username",$username);
            $pass = $this->db->get("user")->row()->password;
            $decrypt = $this->encryption->decrypt($pass);
            if($password == $decrypt)
            {
                return true;
            }
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
    

    function try()
    {
        $this->db->select("password");
        $this->db->where("username","putnaginamooo");
        $result = $this->db->get("user")->row()->password;
        return $this->encryption->decrypt($result);

    }

}
?>