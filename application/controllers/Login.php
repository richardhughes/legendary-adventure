<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{

    public function index()
    {
        if ($this->session->userdata('user')) {
            redirect('update', 'location');
            exit;
        }

        $this->render([
            'title' => WEBSITE_TITLE,
            'content' => [
                'login/index'
            ]
        ]);
    }

    public function check()
    {
        $this->load->model('authentication_model', 'authentication');
        $isLoggedIn = false;
        $message = "Login failed. If you have not already, please signup. Otherwise, check your spelling and login again.";
        if ($this->authentication->authenticateUser(
            $this->input->post('username'), $this->input->post('password'))
        ) {
            $isLoggedIn = true;
            $message = "Welcome back " . $this->session->userdata('user')->username;
        }

        $this->render([
            'title' => WEBSITE_TITLE,
            'content' => [
                'login/check'
            ],
            'loggedin' => $isLoggedIn,
            'message' => $message
        ]);

    }

    public function logout()
    {
        $this->session->unset_userdata('user');
        session_destroy();
        redirect('login', 'refresh');
    }

}
