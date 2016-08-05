<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller
{

    public function index()
    {
        $registered = false;
        if (count($this->input->post()) > 0) {
            $this->load->model('registration_model', 'registration');
            $registered = $this->registration->createUser($this->input->post());
        }

        $this->render([
            'title' => WEBSITE_TITLE,
            'content' => [
                'register/index'
            ],
            'js' => [
                '/static/javascript/controllers/Registration.js'
            ],
            'registered' => $registered
        ]);
    }

}
