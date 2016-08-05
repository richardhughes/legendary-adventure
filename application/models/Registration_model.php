<?php

/**
 * Created by PhpStorm.
 * User: Richie
 * Date: 01/08/2016
 * Time: 20:42
 */
class Registration_model extends CI_Model
{
    public function createUser($userData)
    {
        if (!$this->isUsernameUnique($userData['username'])) {
            return false;
        }

        $this->load->model('authentication_model', 'authentication');
        $hashPassword = $this->authentication->passwordToHash($userData['password']);

        $sql = "INSERT INTO user(username,password,email) VALUES(?,?,?)";
        return $this->db->query($sql, [
            $userData['username'],
            $hashPassword,
            $userData['email']
        ]);
    }

    public function isUsernameUnique($username)
    {
        $sql = "SELECT COUNT(*) as count FROM user WHERE username = ?";
        return $this->db->query($sql, [
            $username
        ])->row()->count == 0;
    }
}