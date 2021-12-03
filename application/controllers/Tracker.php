<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracker extends CI_Controller {


		public function Mainpage()
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
        $this->load->view("pages/login");
    }

    public function login_logic()
    {
        unset($_SESSION['wrong']); // use to clear flash data
        $config_rules = array(
            array (
                "field" => "username_txt",
                "label" => "Username",
                "rules" =>"required",
            ),
             array(
                "field" => "password_txt",
                "label" => "Password",
                "rules" =>"required",
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
                $this->session->set_flashdata("wrong", "You input wrong values!");
                redirect("tracker/login");
            }
            }
        
    }

    public function after_login()
    {
        if($this->session->userdata("username") != "")
        {
            $user = $this->session->userdata("username"); 
            $this->load->view("pages/mainpage", array
        (
            "username" => $user,
            "dog" => "hello",
        ));
        }
        else{
            redirect("tracker/login");
        }
    }


    public function logout()
    {
        $this->session->unset_userdata("username");
        redirect("tracker/login");

    }

    public function register()
    {
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
                "rules" =>"required|is_unique[user.username]",
            ),
             array(
                "field" => "password1_txt",
                "label" => "Password",
                "rules" =>"required|min_length[8]|max_length[20]",
            ),   
            array(
                "field" => "password2_txt",
                "label" => "rewrite-Password",
                "rules" =>"required|min_length[8]|max_length[20]",
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
                        "password" => $password1,
                    )
                    );
                redirect("tracker/login");
                
            }
        }

    }


}

