<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    // ------------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();
    }
    /**
     *
     * @usage
     * All:$this->user_model->get();
     * Single:$this->user_model->get(2);
     *
     */
    //
    public function get($user_id = null)
    {
        if ($user_id === null) {
            $query = $this->db->get('adminuser');
        } elseif (is_array($user_id)) {
            $query = $this->db->get_where('adminuser', $user_id);
        } else {
            $query = $this->db->get_where('adminuser', ['user_id' => $user_id]);
        }
        return $query->result_array();
    }

    // Used in Home/login testing for admin login only
    // public function get_admin($given_username)
    // {
    //     $this->db->select('password');
    //     $this->db->from('adminuser');
    //     $this->db->where('username', $given_username);
    //     return $this->db->get()->row('password');
    // }

    // Function called in Home/login
    public function get_password($given_username)
    {
        $this->db->select('password');
        $this->db->from('adminuser');
        $this->db->where('username', $given_username);
        return $this->db->get()->row('password');
    }

    // Function called in admin/dashboard/
    public function get_users()
    {
        $this->db->select('user_id, username, email');
        $this->db->from('adminuser');
        // $query = $this->db->get('adminuser');
        return $this->db->get()->result_array();
    }

    /**
     *
     * @param array $data
     *
     * @usage $result = $this->user_model->insert(['username' => 'Ultron']);
     *
     */

    public function insert($data)
    {
        $this->db->insert('adminuser', $data);
        return $this->db->insert_id();

    }

    /**
     *
     *
     * @usage $result = $this->user_model->update(['username' => 'Thanos',], 4);
     *
     */

    public function update($data, $user_id)
    {
        $this->db->where(['user_id' => $user_id]);
        $this->db->update('adminuser', $data);
        return $this->db->affected_rows();
    }

    public function update_user($user_id, $update_data)
    {
        // error message

        $this->db->where('user_id', $user_id);
        $this->db->update('adminuser', $update_data);
        return $this->db->affected_rows();

    }

    /**
     *
     * @usage $result = $this->user_model->delete(3);
     *
     */

    public function delete($user_id)
    {
        $this->db->delete('adminuser', ['user_id' => $user_id]);
        return $this->db->affected_rows();

    }

    // ALL CODE BELOW FROM EARLIER
    // ------------------------------------------------------------------------
    // ------------------------------------------------------------------------
    // ------------------------------------------------------------------------
    // ------------------------------------------------------------------------

    // public function index()
    // {
    //     $query = $this->db->get("user");
    //     $data['records'] = $query->result();
    //     $data['page'] = 'user/calcandar';
    //     $this->load->view('main/content', $data);
    // }

    // ------------------------------------------------------------------------
    // public function insert($data)
    // {
    //     // $this->db->insert('user', $data);
    //     // return $this->db->insert_id();

    //     if ($this->db->insert("user", $data)) {
    //         return true;
    //     }
    // }

    // public function add_user()
    // {
    //     $this->load->model('User_model');
    //     $data = array(
    //         'username' => $this->input->post('username'),
    //         'password' => $this->input->post('password'),
    //     );
    //     $this->User_model->insert($data);
    //     $query = $this->db->get('user');
    //     $data['records'] = $query->result();
    //     $data['page'] = 'user/calcandar';
    //     $this->load->view('main/content', $data);

    // }

    // public function get_name()
    // {
    //     $this->load->helper('form');
    //     $this->db->select('username');
    //     $this->db->from('user');
    //     return $this->db->get()->row('username');

    // }

    // ------------------------------------------------------------------------
    // public function getPassword($given_username)
    // {
    //     $this->db->select('password');
    //     $this->db->from('user');
    //     $this->db->where('username', $given_username);
    //     return $this->db->get()->row('password');
    // }

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */