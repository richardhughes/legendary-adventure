<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{

    /**
     * The homepage / login page
     */
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

    /**
     * Page to check that the users login is valid
     */
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

    /**
     * Log the user out and destroy the session
     */
    public function logout()
    {
        $this->session->unset_userdata('user');
        $this->session->sess_destroy();
        redirect('login');
    }

}
