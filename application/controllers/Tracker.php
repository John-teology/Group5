<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracker extends CI_Controller {


		public function mainpage()
	{
		// $this->load->view('pages/Mainpage');
        if($this->session->userdata("username") != "")
        {
            $user = $this->session->userdata("username"); 
            $this->load->view("pages/Mainpage", array
        (
            "username" => $user,
        ));
        }
        else{
            redirect("tracker/login");
        }
	}


    

    public function login()
    {  
        
        unset($_SESSION['not_equal']);
        $this->load->view("pages/login");
    }

    public function login_logic()
    {
        unset($_SESSION['registered']);
        unset($_SESSION['wrong']); // use to clear flash data
        $config_rules = array(
            array (
                "field" => "username_txt",
                "label" => "Username",
                "rules" =>"trim|required",  // callback_ use to call any function you want
            ),
             array(
                "field" => "password_txt",
                "label" => "Password",
                "rules" =>"trim|required",
            ),  
        );
        $this->form_validation->set_rules($config_rules);
        if($this->form_validation->run() == false){

            $this->login(); // run this function again
        }
        else
        {
            $username = $this->input->post("username_txt");
            $password = $this->input->post("password_txt");

            if($this->t_model->login_validation($username,$password))
            {
                $session_data = array(
                    'username' => $username
                );
                $this->session->set_userdata($session_data);
                redirect("tracker");
            }
            else{
                $this->session->set_flashdata("wrong", "Invalid Credentials");
                $this->login();
            }
            }
        
    }


    public function logout()
    {
        $this->session->unset_userdata("username");
        redirect("tracker/login");

    }

    public function register()
    {
        unset($_SESSION['registered']);
        unset($_SESSION['wrong']);
        $this->load->view("pages/register");
    }


    public function register_method()
    {
        unset($_SESSION['wrong']);
         unset($_SESSION['not_equal']);
           $config_rules = array(
            array (
                "field" => "username_txt",
                "label" => "Username",
                "rules" =>"trim|required|is_unique[user.username]",
            ),
             array(
                "field" => "password1_txt",
                "label" => "Password",
                "rules" =>"trim|required|min_length[8]|max_length[20]",
            ),   
            array(
                "field" => "password2_txt",
                "label" => "Confirm Password",
                "rules" =>"trim|required|min_length[8]|max_length[20]",
            ),  
        );

        $this->form_validation->set_rules($config_rules);

        if($this->form_validation->run() == false)
        {
            $this->register();
        }
        else
        {
            $username = $this->input->post("username_txt");
            $password1 = $this->input->post("password1_txt");
            $password2 = $this->input->post("password2_txt");

            if($password1 != $password2)
            {
                $this->session->set_flashdata("not_equal", "Your passwrods are not the same");
                $this->register();
            }
            else
            {
                   
                $this->t_model->register_credentials(
                    array(
                        "username" => $username,
                        "password" => $this->encryption->encrypt($password1),
                    )
                    );
                $this->session->set_flashdata("registered", "You succesfully registered!");
                redirect("tracker/login");
                
            }
        }

    }

    public function createEstablishment() {
        $this->load->view('pages/createEst');
    }

    public function user_proc()
    {
        if($this->session->userdata("username") != "")
        {   
            $user = $this->session->userdata("username"); 
            $user_id = $this->t_model->get_user_id($user);
            if($this->t_model->is_user_have_ct($user_id))
            {
                redirect('tracker/contact_tracing');
            }
            else
            {
                redirect("tracker/contact_tracing_form");
            }

        }
        else{
            redirect("tracker/login");
        }

    }

    public function CT_form()
    {
          if($this->session->userdata("username") != "")
        {   
            $this->load->view('pages/contact_t_form');
        }
        else{
            redirect("tracker/login");
        }
    }

    public function CT_form_logic()
    {
        $config_rules = array(
            array (
                "field" => "firstname_txt",
                "label" => "Firstname",
                "rules" =>"trim|required|min_length[3]|max_length[20]",
            ),
                array (
                "field" => "lastname_txt",
                "label" => "Lasstname",
                "rules" =>"trim|required|min_length[2]|max_length[20]",
            ),
                array (
                "field" => "phone_txt",
                "label" => "PhoneNumber",
                "rules" =>"trim|required|min_length[11]|max_length[20]",
            ),
                array (
                "field" => "age_txt",
                "label" => "Age",
                "rules" =>"trim|required|min_length[2]|max_length[3]",
            ),
                array (
                "field" => "email_txt",
                "label" => "Email",
                "rules" =>"trim|required|min_length[8]|max_length[20]",
            ),
        );

        $this->form_validation->set_rules($config_rules);

        if($this->form_validation->run() == false)
        {
            $this->CT_form();
        }
        else
        {
            $user = $this->session->userdata("username"); 
            $firstname = $this->input->post("firstname_txt");
            $lastname = $this->input->post("lastname_txt");
            $phone = $this->input->post("phone_txt");
            $email = $this->input->post("email_txt");
            $age = $this->input->post("age_txt");
            // add_contract_tracing
            $this->t_model->add_contract_tracing(
                        array(
                            "user_id" =>$this->t_model->get_user_id($user),
                            "first_name" => $firstname,
                            "last_name" => $lastname,
                            "age" => $age,
                            "phone_number" => $phone,
                            "email" => $email,
                        )
                        );
            redirect("tracker/contact_tracing");
        }
    }

    public function CT_display()
    {
        if($this->session->userdata("username") != "")
            {
                $user = $this->session->userdata("username"); 
                $user_id = $this->t_model->get_user_id($user);
                $data = $this->t_model->get_user_ct($user_id);
                $this->load->view('pages/contact_t',array(
                    "data"=>$data,
                ));
            }
        else{
            redirect("tracker/login");
        }

    }

    public function CT_update($id)
    {
        if($this->session->userdata("username") != "")
        {
            $data = $this->t_model->get_ct_by_id($id);
            $this->load->view("pages/contact_t_update",array(
                "data" => $data,
            ));

        }
        else{
            redirect("tracker/login");
        }
    }

    public function CT_update_logic($id)
    {
        $config_rules = array(
            array (
                "field" => "firstname_txt",
                "label" => "Firstname",
                "rules" =>"trim|required|min_length[3]|max_length[20]",
            ),
                array (
                "field" => "lastname_txt",
                "label" => "Lasstname",
                "rules" =>"trim|required|min_length[2]|max_length[20]",
            ),
                array (
                "field" => "phone_txt",
                "label" => "PhoneNumber",
                "rules" =>"trim|required|min_length[11]|max_length[20]",
            ),
                array (
                "field" => "age_txt",
                "label" => "Age",
                "rules" =>"trim|required|min_length[2]|max_length[3]",
            ),
                array (
                "field" => "email_txt",
                "label" => "Email",
                "rules" =>"trim|required|min_length[8]|max_length[20]",
            ),
        );

        $this->form_validation->set_rules($config_rules);

        if($this->form_validation->run() == false)
        {
            $this->CT_update($id);
        }
        else
        {
            $firstname = $this->input->post("firstname_txt");
            $lastname = $this->input->post("lastname_txt");
            $phone = $this->input->post("phone_txt");
            $email = $this->input->post("email_txt");
            $age = $this->input->post("age_txt");
            $data= array(
                "first_name" => $firstname,
                "last_name" => $lastname,
                "age" => $age,
                "phone_number" => $phone,
                "email" => $email,

            );
            $this->t_model->update_ct($id,$data);
        }

        redirect("tracker/contact_tracing");
    }
}

