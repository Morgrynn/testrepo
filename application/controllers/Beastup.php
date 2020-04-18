<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beastup extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['page'] = 'pages/main';
        $this->load->view('menu/content', $data);
    }

    public function user_page()
    {
        $data['page'] = 'user/calandar';
        $this->load->view('menu/content', $data);
    }

    public function login()
    {
        $given_username = $this->input->post('username');
        $given_password = $this->input->post('password');
        $admin_username = 'admin';
        $admin_password = 'admin';
        $this->load->model('User_model');

        // Access the user registration database for login username and password

        $db_password = $this->User_model->getPassword($given_username);
        // If successfully Logged In
        if (password_verify($given_password, $db_password)) {
            // $_SESSION['logged_in'] = true;
            // $_SESSION['username'] = $given_username;
            redirect('user/show_user');

        }
        //  else if ($given_username === $admin_username && $given_password === $admin_password) {
        //     $_SESSION['logged_in'] = true;
        //     $_SESSION['username'] = $admin_username;
        //     $this->load->view('pages/admin_page');
        // }
        // else {
        //     $_SESSION['logged_in'] = false;
        //     index();
        // }
    }

}

/* End of file Beastup.php */
/* Location: ./application/controllers/Beastup.php */