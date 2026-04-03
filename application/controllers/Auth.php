<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database('default');
        $this->load->model('Main_model');
    }

    public function index()
    {
        if ($this->session->userdata('id_user')) {
            redirect('admin/dashboard');
        }
        $data['title'] = 'Login Pages';
        $this->load->view('login/layout/header', $data);
        $this->load->view('login/V_login');
        $this->load->view('login/layout/footer');
    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->Main_model->get_user_by_email($email);

        if ($user) {
            if (password_verify($password, $user->password)) {
                $session_data = [
                    'id_user'   => $user->id_user,
                    'username'  => $user->username,
                    'email'     => $user->email,
                    'fullname'  => $user->fullname,
                    'role_id'   => $user->role_id,
                    'logged_in' => TRUE
                ];
                $this->session->set_userdata($session_data);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Password salah!');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('error', 'Email tidak terdaftar!');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
