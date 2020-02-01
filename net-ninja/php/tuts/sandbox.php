<?php

// classes

class User
{
    private $email;
    private $name;

    public function __construct($name, $email)
    {
        // $this->email = 'mario@thenetninja.co.uk';
        // $this->name = 'mario';
        $this->email = $email;
        $this->name = $name;
    }

    public function login()
    {
        // echo 'the user logged in';
        echo $this->name . ' logged in';
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (is_string($name) && strlen($name) > 1) {
            $this->name = $name;
            return "name has been updated to $name";
        } else {
            return 'not a valid name';
        }
    }
}

// $userOne = new User();

// $userOne->login();
// echo $userOne->email;

$userTwo = new User('yoshi', 'yoshi@thenetninja.co.uk');

// echo $userTwo->getName();
// echo $userTwo->setName(50);
echo $userTwo->setName('shaun');
echo $userTwo->getName();
