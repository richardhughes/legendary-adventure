<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function index() {
        $this->render([
            'title' => 'Website Title',
            'content' => [
                '/application/views/login/index.php'
            ]
        ]);
    }

    public function check() {
        $this->load->model('authentication_model','authentication');
        $isLoggedIn = false;
        $message = "Login failed. If you have not already, please signup. Otherwise, check your spelling and login again.";
        if ($this->authentication->authenticateUser(
                        $this->input->post('username'), $this->input->post('password'))) {
            $isLoggedIn = true;
            $message = "Welcome back " . $this->session->userdata('user')->username;
        }
        
        $this->render([
                'title' => 'Website Title',
                'content' => [
                    '/application/views/login/check.php'
                ],
            'loggedin' => $isLoggedIn,
            'message' => $message
            ]);
        
    }

}
