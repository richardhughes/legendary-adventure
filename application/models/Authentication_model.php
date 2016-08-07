<?php

/**
 * Description of Authentication
 *
 * @author Richie
 */
class Authentication_model extends CI_Model
{

    /**
     * Check to authenticate the user given the posted username and password
     *
     * @param $username
     * @param $password
     * @return bool
     */
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

    /**
     * Get the users details based on the username
     *
     * @param $username
     * @return mixed
     */
    public function getUser($username)
    {
        $sql = "SELECT * FROM user WHERE username = ?";
        return $this->db->query($sql, [
            $username
        ])->row();
    }

    /**
     * Check to see if the password is valid
     *
     * @param $password
     * @param $userPassword
     * @return bool
     */
    public function isPasswordValid($password, $userPassword)
    {
        return password_verify($password, $userPassword);
    }

    /**
     * Get the password hash
     *
     * @param $password
     * @return bool|mixed|string
     */
    public function passwordToHash($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

}
