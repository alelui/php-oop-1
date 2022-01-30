<?php
class User{
    public $name;
    public $surname;
    public $email;

    public function getFullName()
    {
        return "{$this->name} {$this->surname}";
    }
}

