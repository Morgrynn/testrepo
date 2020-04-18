<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // To ensure that the user is logged in
        // $user_id = $this->session->userdata('user_id');
        // if (!$user_id) {
        //     $this->logout();
        // }
    }

    public function index()
    {
        $data['page'] = 'dashboard/user_view';
        $this->load->view('dashboard/inc/content_view', $data);
    }

    public function logout()
    {
        session_destroy();
        redirect('/');
    }

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */