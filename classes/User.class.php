<?php


include 'DB.class.php';

class User
{
    protected $_id;
    protected $_db;
    protected $_name;
    protected $_password;
    protected $_salt;

    function __construct($id = 0)
    {
        $this->_id = $id;
        $this->_db = new DB();
    }

    function setPassword()
    {

    }

    function setName()
    {

    }

    function getUserName()
    {

    }

    function newUser($registration_name, $registration_email, $registration_password)
    {
        if (($this->_db->existField(email, $registration_email)) && ($this->_db->existField(name, $registration_name))) {
            $salt = $this->generateSalt();
            $password = md5(md5($registration_password) . $salt);
            $this->_db->addNewUser($registration_name, $registration_email, $password, $salt);
            return true;
        } else
            return false;
    }

    protected function generateSalt()
    {
        $salt = '';
        $length = rand(5, 10); // длина соли (от 5 до 10 сомволов)
        for ($i = 0; $i < $length; $i++) {
            $salt .= chr(rand(33, 126)); // символ из ASCII-table
        }
        $salt = md5($salt);
        return $salt;
    }

    function userLogin($userLogin, $userPassword)
    {

        if ($res = $this->_db->checkLogin($userLogin, $userPassword)) {
            session_start();
            $_SESSION['user_login'] = $userLogin;
            $_SESSION['user_hash'] = $res;
            return true;
        } else {
            return false;
        }

    }
}