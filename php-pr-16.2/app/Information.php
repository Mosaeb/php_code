<?php


namespace App;


class Information
{
    public $firstName,$lastName,$email,$printInformation;
    public function __construct($post)
    {
        $this->firstName='first_name';
        $this->lastName='last_name';
        $this->email='email';
    }
    public function makePrintInformation()
    {
        $this->printInformation=$this->firstName.''.$this->lastName.''.$this->email;
        header("Location:web.php?page=form&&result=$this->printInformation");
    }

}