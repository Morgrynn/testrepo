<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    // ------------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    // ------------------------------------------------------------------------

    public function index()
    {
        // $this->load->view('adminpanel/dashboard');
        $data['page'] = 'adminpanel/dashboard_view';
        $this->load->view('adminpanel/inc/content_view', $data);
    }

    // ------------------------------------------------------------------------

    // This links to the customers page in admin dashboard
    public function members()
    {
        $data['members'] = $this->User_model->get_users();
        // print_r($data);
        $data['page'] = 'adminpanel/customers_view';
        $this->load->view('adminpanel/inc/content_view', $data);
    }

    // ------------------------------------------------------------------------

    public function edit_user()
    {
        $user_id = $this->input->post('user_id');
        $update_data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
        );
        // print_r($this->input->post());
        // print_r($update_data);
        $test = $this->User_model->update_user($user_id, $update_data);
        if ($test == 0) {
            $data['message'] = 'You can not update this user';
            $data['return_url'] = 'members';
            $data['page'] = 'adminpanel/feedback_modal';
            $this->load->view('adminpanel/inc/content', $data);
        } else {
            // redirect('book/show_books');
            $data['message'] = 'Book updated successfully';
            $data['return_url'] = 'members';
            $data['page'] = 'adminpanel/feedback_modal';
            $this->load->view('adminpanel/inc/content', $data);
        }
    }

    // ------------------------------------------------------------------------

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */