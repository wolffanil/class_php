<?php

class User {
    private $id = '0';
    private $name = '';
    public $firstName = '';
    private $lastName = '';
    private $phone = '';
    private $year_birth = '';
    private $password = '';

    function __construct($name, $password) {
        $this->name = $name;
        $this->password = $password;
    }

    function NewInfo($firstName, $lastName, $phone, $year_birth) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->year_birth = $year_birth;
    }

    public function auth($name, $password) {
        if ($this->name === $name && $this->password === $password) {
            return true;
        } else {
            return false;
        }
    }

    function showData() {
        if($this->firstName !== '') {
            
            echo 'Name: '. $this->name;
            echo 'firstName: '. $this->firstName;
            echo 'lastName: '. $this->lastName;
            echo 'phone: '. $this->phone;
            echo 'year_birth: '. $this->year_birth;
        }

    }

    function checkId($id) {
        if($this->id === $id) return true;

        return false;
    }

  

    
}

$user = new User('user', 'qwerty227');



?>