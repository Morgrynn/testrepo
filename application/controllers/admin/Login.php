<?php
defined('BASEPATH') or exit('No direct script access allowed');

// https://www.youtube.com/watch?v=lt0bNcgQzJk&list=PLh89M5lS1CIATULcdS4UHx9pj3GGW8nNM&index=24

class Login extends CI_Controller
{

    // ------------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();
    }

    // ------------------------------------------------------------------------

    public function index()
    {
        $data['page'] = 'adminpanel/loginview';
        $this->load->view('menu/content', $data);
    }

    // ------------------------------------------------------------------------

    public function login_post()
    {
        print_r($_POST);
        if (isset($_POST)) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = $this->db->query("SELECT * FROM `adminuser` WHERE
             `username`='$username' AND `password`='$password'");

            if ($query->num_rows()) {
                //Credentials are valid
                $result = $query->result_array();
                // echo "<pre>";
                // print_r($result);die();
                $this->session->set_userdata('user_id', $result[0]['user_id']);
                // redirect('admin/dashboard');

                if ($result[0]['user_id'] == '1') {
                    redirect('admin/dashboard');
                } else {
                    redirect('beastup/user_page');
                }
            } else {
                //  invalid credentials
            }
        } else {
            die("Invalid Input");
        }
    }

    // ------------------------------------------------------------------------

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */