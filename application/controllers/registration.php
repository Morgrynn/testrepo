<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Registration_model');

    }

    public function index()
    {
        $data['page'] = 'register/show_user';
        $this->load->view('menu/content', $data);
    }

    public function show_user()
    {
        $data['username'] = $this->Registration_model->get_username();
        // print_r($data);
        $data['page'] = 'register/show_user';
        $this->load->view('menu/content', $data);
    }

    public function validation()
    {
        $this->form_validation->set_rules('reg_username', 'Name', 'required|trim|is_unique[register_user.username]');
        // $this->form_validation->set_rules('reg_email', 'Email Address', 'required|trim|valid_email|is_unique[register_user.email]');
        // $this->form_validation->set_rules('reg_password', 'Password', 'required|trim');
        // $this->form_validation->set_rules('first_name', 'FirstName', 'trim');
        // $this->form_validation->set_rules('last_name', 'LastName', 'trim');
        // $this->form_validation->set_rules('birthyear', 'Birthyear', 'trim');
        // $this->form_validation->set_rules('gender', 'Gender', 'required');
        if ($this->form_validation->run()) {
            $plain_password = $this->input->post('reg_password');
            $hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);
            $data = array(
                'username' => $this->input->post('reg_username'),
                // 'email' => $this->input->post('reg_email'),
                // 'password' => $hashed_password,
                // 'first_name' => $this->input->post('first_name'),
                // 'last_name' => $this->input->post('last_name'),
                // 'birthyear' => $this->input->post('birthyear'),
                // 'gender' => $this->input->post('gender'),
            );
            $id = $this->Registration_model->insert($data);
            // TODO create a pop up modal for registration verification
            if ($id > 0) {
                // $data['message'] = 'Registration complete, you can now login.';
                // $data['return_url'] = 'index';
                // $data['page'] = 'homepage/index';
                // $this->load->view('menu/content', $data);
                echo "succes";
            }
        } else {
            // display validation error
            $this->index();
        }
    }

}

/* End of file Registration.php */
/* Location: ./application/controllers/Registration.php */