<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $data['page'] = 'home/register_view';
        $this->load->view('home/inc/content_view', $data);
    }

    // ------------------------------------------------------------------------

    public function admin()
    {
        $data['page'] = 'dashboard/admin_view';
        $this->load->view('dashboard/inc/content_view', $data);
    }

    // ------------------------------------------------------------------------

    public function testget()
    {
        // $data = $this->user_model->get(1);
        // print_r($data);

        $admin = $this->user_model->get(1);
        print_r($admin[0]['username']);
        print_r($admin[0]['password']);

        // Use the Profiler to Debug
        // $this->output->enable_profiler();
    }

    // ------------------------------------------------------------------------

    public function homepage_login()
    {
        redirect('/');
    }

    // ------------------------------------------------------------------------

    public function register()
    {
        $this->form_validation->set_rules('reg_username', 'Name', 'required|trim|is_unique[adminuser.username]');
        $this->form_validation->set_rules('reg_email', 'Email Address', 'required|trim|valid_email|is_unique[adminuser.email]');
        $this->form_validation->set_rules('reg_password', 'Password', 'required|trim');
        if ($this->form_validation->run()) {
            $plain_password = $this->input->post('reg_password');
            $hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);
            $data = array(
                'username' => $this->input->post('reg_username'),
                'email' => $this->input->post('reg_email'),
                'password' => $hashed_password,
            );
            $id = $this->user_model->insert($data);
            // TODO create a pop up modal for registration verification
            if ($id > 0) {
                $data['message'] = 'Registration complete, you can now login.';
                $data['return_url'] = 'homepage_login';
                $data['page'] = 'home/confirmation';
                $this->load->view('home/inc/content_view', $data);
            }
        } else {
            // display validation error
            $this->index();
        }
    }

    // ------------------------------------------------------------------------

    public function testinsert()
    {
        $result = $this->user_model->insert([
            'username' => 'Ultron',
        ]);
        print_r($result);
    }

    // ------------------------------------------------------------------------

    public function testupdate()
    {
        $result = $this->user_model->update([
            'username' => 'Thanos',
        ], 4);
        print_r($result);
    }

    // ------------------------------------------------------------------------

    public function testdelete()
    {
        $result = $this->user_model->delete(3);
        print_r($result);
    }

    // ------------------------------------------------------------------------

    // ALL CODE BELOW FROM EARLIER
    // ------------------------------------------------------------------------
    // ------------------------------------------------------------------------
    // ------------------------------------------------------------------------
    // ------------------------------------------------------------------------

    // public function show_user()
    // {
    //     $this->load->model('User_model');
    //     $data['username'] = $this->User_model->get_name();
    //     $data['page'] = 'user/calandar ';
    //     $this->load->view('menu/content', $data);
    // }

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */