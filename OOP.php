<?php

class User
{
    //Properties are attributes that belong to a class
    public $name;
    public $email;
    public $password;

    //constructor
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function set_name($name)
    {
        $this->name = $name;
    }
}


// $user1->set_name('Carl');

// var_dump($user1);
// echo $user1->name = 'Brad';
// $user1 = new User('carl', "cj@gmail.com", '122424');



// var_dump($user1);


class Employee extends User
{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password); //like super in js
        $this->title = $title;
    }


    public function get_title()
    {   
        return $this->title;
    }
}


$employee1 = new Employee('Sara', 'sara@gmail.com', '43434', 'Manager');

echo $employee1->get_title();