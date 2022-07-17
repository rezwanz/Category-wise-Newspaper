<?php


namespace App\classes;


class Login
{
    public $email = 'admin@local.com';
    public $password = '123456';
    public $userEmail;
    public $userPassword;

    public function index()
    {
        header('Location: action.php?page=login');
    }

    public function __construct($post = null)
    {
        if ($post)
        {
            $this->userEmail = $post['email'];
            $this->userPassword = $post['password'];
        }
    }

    public function checkUser()
    {
        if ($this->email == $this->userEmail && $this->password == $this->userPassword)
        {
            header('Location: action.php?page=home');
        }
        else
        {
            return 'Opps...something went wrong';
        }
    }
}