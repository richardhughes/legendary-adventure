<?php

/**
 * Created by PhpStorm.
 * User: Richie
 * Date: 02/08/2016
 * Time: 20:11
 */
class Update extends MY_Controller
{
    public function index()
    {
        $this->render([
            'title' => WEBSITE_TITLE,
            'content' => [
                'update/index'
            ]
        ]);
    }
}