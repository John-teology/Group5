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
    
    
    function get_user_id($username)
    {
        // this is use to get the ID of the user who is currently logged in
        $this->db->select("id");
        $this->db->where("username",$username);
        $result = $this->db->get("user")->row()->id;
        
        return $result;
         

    }


    // all function below this are all about contact tracing CRUD

    function add_contract_tracing($data)
    {
        // use to pass all the data from ct form to database
        return $this->db->insert("contact_tracing",$data);        
    }

    function is_user_have_ct($user_id){

        $this->db->where("user_id",$user_id);
        if($this->db->get("contact_tracing")->num_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function get_user_ct($user_id)
    {
        $this->db->select("*");
        $this->db->where("user_id",$user_id);
        $result = $this->db->get("contact_tracing")->row();

        return $result;
    }

    function get_ct_by_id($id)
    {
        $this->db->select("*");
        $this->db->where("id",$id);

        $result = $this->db->get("contact_tracing")->row();
        // SELECT * FROM contact_tracing WHERE id = 1

        return $result;
    }

    function update_ct($id,$data)
    {
        $this->db->where('id', $id);
        $this->db->update('contact_tracing', $data);
    }


    //Establishment Create

    function add_establishment_try($data)
    {
        
        return $this->db->insert("establishment_try",$data);        
    }

    function is_user_have_ctt($user_id){

        $this->db->where("Id",$user_id);
        if($this->db->get("establishment_try")->num_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function get_user_establishment($user_id)
    {
        $this->db->select("*");
        $this->db->where("userID",$user_id);
        $result = $this->db->get("establishment_try")->result();

        return $result;
    }

    function get_establishment_by_id($establishment_id)
    {
        $this->db->select("*");
        $this->db->where("id",$establishment_id);
        $result = $this->db->get("establishment_try")->row();

        return $result;
    }


    //Establishment Update

    function update_establishment($establishment_id,$data)
    {
        $this->db->where('id', $establishment_id);
        $this->db->update('establishment_try', $data);
    }

    function get_all_establishments()
    {
        $this->db->select("*");
        $result = $this->db->get("establishment_try")->result_array();

        return $result;


    }

    function get_user_ct_by_id($userid)
    {
        $this->db->select("id");
        $this->db->where("id",$userid);

        $result = $this->db->get("contact_tracing")->row()->id;

        return $result;

    }

    function add_report($data)
    {
        return $this->db->insert("report",$data);
    }

}
?>