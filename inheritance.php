<?php

class user
{
    public $username;
    private $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend()
    {
        return "$this->username Nambahin temen baru";
    }

    // getters
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($username)
    {
        if (strpos($username, '@') > -1) {
            $this->email = $username;
        };

    }

}

class Adminuser extends user
{
    public $level;
    public function __construct($username, $email, $level)
    {
        parent::__construct($username, $email);
        $this->level = $level;
    }
}

$user1 = new User('Adul', 'adul@gmail.com');
echo $user1->username . "<br>";
echo PHP_EOL;
echo $user1->getEmail();
echo "<br>";
$useradmin = new Adminuser('Oyraaaa', 'Oyra@gmail.com', '9');
echo $useradmin->username . "<br>";
echo PHP_EOL;
echo $useradmin->getEmail();
echo "<br>";
echo $useradmin->level;
