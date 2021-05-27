<?php
    class Login extends CI_Controller {
        public function __construct() {
            // Initialise and construct controller, libraries and model
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->model('My_model');
        }

        public function index() {
            // Display the Login page
            $this->load->view("login");
        }

        public function authenticate(){
            // Function to validate and authenticate the username and password
            $this->form_validation->set_rules('username','Username','required',array('required'=>'Login must be filled.'));
            $this->form_validation->set_rules('password','Password','required',array('required'=>'Password must be filled.'));

            if($this->form_validation->run()==false){
                // If user enters wrong username or password, redirect back to Login page
                echo $this->form_validation->run();
                $this->load->view('login');
            }
            else {
                if($this->My_model->checklogin($_POST["username"],$_POST["password"])>0){
                    // If user enters correct username and password, display the Admin page
                    $this->session->set_userdata("username",$_POST["username"]);
                    redirect(base_url() . "Admin");
                }
                else {
                    // If user enters wrong username or password, display the Validation Error message
                    $data["loginerror"]="Invalid login or password.";
                    $this->load->view("login",$data);
                }
            }
        }

        public function logout(){
            // Log out from Admin page and return to Login page
            $this->session->sess_destroy();
            redirect(base_url() . "Login");
        }
    }