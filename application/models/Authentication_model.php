<?php

/**
 * Description of Authentication
 *
 * @author Richie
 */
class Authentication_model extends CI_Model
{

    public function authenticateUser($username, $password)
    {
        $user = $this->getUser($username);
        if (!$user) {
            return false;
        }

        if (!$this->isPasswordValid($password, $user->password)) {
            return false;
        }

        $this->session->set_userdata('user', $user);
        return true;
    }

    public function getUser($username)
    {
        $sql = "SELECT * FROM user WHERE username = ?";
        return $this->db->query($sql, [
            $username
        ])->row();
    }

    public function isPasswordValid($password, $userPassword)
    {
        return password_verify($password, $userPassword);
    }

    public function passwordToHash($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

}
