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
        $this->db->where("user_id",$userid);

        $result = $this->db->get("contact_tracing")->row()->id;

        return $result;

    } 

    function add_report($data)
    {
        return $this->db->insert("report",$data);
    }

    function is_report_not_inside($user_ct_id,$est_id)
    { // this check if a single report is one for a day
        $this->db->select("id");
        $this->db->where(array(
            "ct_id" => $user_ct_id,
            "est_id" => $est_id,
            "date_t" => date("Y-m-d")
        ));

        $result = $this->db->get("report")->result();
        if(empty($result))
        {
            return true;
        }
        return false;
    }

    function get_ct_ids($est_id)
    {
        $this->db->select("ct_id");
        $this->db->where("est_id",$est_id);

        $result = $this->db->get("report")->result();
        return $result;
        
    }
    function get_ct_details($data)
    {
        $this->db->select("*");
        $this->db->where_in('id', $data);

        $result = $this->db->get("contact_tracing")->result();
        return $result;

    }

    function get_report_id($data)
    {
        $this->db->select("id");
        $this->db->where($data);

        $result = $this->db->get("report")->row()->id;

        return $result;

    }

    function report_to_What($report_id,$data)
    {
        $this->db->where('id', $report_id);
        $this->db->update('report', $data);
    }

    function get_report_status($data)
    {
        $this->db->select("id");
        $this->db->where($data);

        $result = $this->db->get("report")->result();

        return $result;

    }
}