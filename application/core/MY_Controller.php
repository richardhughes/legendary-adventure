<?php

/**
 * Description of MY_Controller
 *
 * @author Richie
 */
class MY_Controller extends CI_Controller
{

    private static $common_js = [
        '/static/javascript/thirdparty/jquery-3.1.0.min.js',
        '/static/javascript/thirdparty/bootstrap.min.js'
    ];
    private static $common_css = [
        '/static/css/base.css',
        '/static/css/bootstrap-overrides.css',
        '/static/css/thirdparty/bootstrap.min.css'
    ];

    private $excludedClasses = [
        'login',
        'register'
    ];

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('user') &&
            !in_array($this->router->class, $this->excludedClasses)) {
            redirect('login');
        }

    }

    public function render($data, $view = 'baseview')
    {

        if (!isset($data['css']) || empty($data['css'])) {
            $data['css'] = [];
        }

        if (!isset($data['js']) || empty($data['js'])) {
            $data['js'] = [];
        }

        $data['css'] = array_merge($data['css'], self::$common_css);
        $data['js'] = array_merge($data['js'], self::$common_js);

        $this->load->view($view, $data);
    }

}
