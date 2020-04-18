<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Registration_model');
        // $this->load->model('User_model');
    }

    public function index()
    {
        $data['page'] = 'pages/first';
        $this->load->view('menu/content', $data);
    }

    public function second()
    {
        $data['page'] = 'pages/second';
        $this->load->view('menu/content', $data);
    }

    public function login()
    {
        $given_username = $this->input->post('username');
        $given_password = $this->input->post('password');
        $admin_username = 'admin';
        $admin_password = 'admin';

        // Access the user registration database for login username and password

        $db_password = $this->Registration_model->getPassword($given_username);
        // If successfully Logged In
        if (password_verify($given_password, $db_password)) {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $given_username;
            redirect('homepage/second');

        } else if ($given_username === $admin_username && $given_password === $admin_password) {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $given_username;
            $this->load->view('pages/admin_page');
        } else {
            $_SESSION['logged_in'] = false;
            redirect('homepage/index');
        }

    }

    // public function add_to_register()
    // {
    //     // print_r($this->input->post());
    //     $insert_data = array(
    //         'username' => $this->input->post('username'),
    //     );
    //     // $test = $this->User_model->addUser($insert_data);
    //     // echo 'inserted ' . $test . 'user';
    //     // $this->Registration_model->addUser($insert_data);
    //     // redirects back to the controller/function
    //     redirect('registration/show_user');
    // }

}

/* End of file Homepage.php */
/* Location: ./application/controllers/Homepage.php */