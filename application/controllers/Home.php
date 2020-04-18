<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    // ------------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

    }

    // ------------------------------------------------------------------------

    public function index()
    {
        $data['page'] = 'home/main_view';
        $this->load->view('home/inc/content_view', $data);
    }

    // ------------------------------------------------------------------------

    public function register()
    {
        $data['page'] = 'home/register_view';
        $this->load->view('home/inc/content_view', $data);
    }

    // ------------------------------------------------------------------------

    public function login()
    {
        $given_username = $this->input->post('username');
        $given_password = $this->input->post('password');

        $admin_data = $this->user_model->get(1);
        $admin_username = $admin_data[0]['username'];
        $admin_password = $admin_data[0]['password'];
        // print_r($admin_data[0]['username']);
        // print_r($admin_data[0]['password']);

        // if ($given_username === $admin_data[0]['username']) {
        //     $this->load->view('dashboard/admin_view');
        // }

        $db_password = $this->user_model->get_password($given_username);
        // $admin_pass = $this->user_model->get_admin($given_username);
        // echo 'pass=' . $admin_pass;
        // if (password_verify($given_password, $admin_pass)) {
        //     // $_SESSION['logged_in'] = true;
        //     // $_SESSION['username'] = $given_username;
        //     // redirect('user/admin');
        //     echo 'pass=' . $admin_pass;

        // }
        if (password_verify($given_password, $db_password)) {
            // echo 'loggedin';
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $given_username;
            redirect('dashboard');
        } elseif ($given_password === $admin_data[0]['password']) {
            redirect('admin/dashboard/index');
        } else {
            // $_SESSION['logged_in'] = false;
            redirect('/');
        }

    }

    // ------------------------------------------------------------------------

    // public function test()
    // {
    //     $this->db->select('user_id, username');
    //     $this->db->order_by('user_id DESC');
    //     // $q = $this->db->get_where('adminuser');
    //     $q = $this->db->get('adminuser');
    //     echo "<pre>";
    //     print_r($q->result());
    // }

    // ------------------------------------------------------------------------

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */