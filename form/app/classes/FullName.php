<?php


namespace App\classes;


class FullName
{
    public $firstName,$lastName,$fullName;
    public function __construct($post)
    {
        $this->firstName=$post['first_name'];
        $this->lastName =$post['last_name'];
    }

    public function makeFullName()
    {
        $this->fullName=$this->firstName.' '.$this->lastName;
        header("Location: web.php?page=form&&result=$this->fullName");
    }
}