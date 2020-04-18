<?php
class StaffMember
{
    public $name = "";
    public $position = "";
    public $bio = "";
    public $img = "";
    public $email = "";

    function setName($value) {
        $this->name = $value;
    }
    function setImg($value) {
        $this->img = $value;
    }
    function setPosition($value) {
        $this->position = $value;
    }
    function setBio($value) {
        $this->bio = $value;
    }
    function setEmail($value) {
        $this->email = $value;
    }

    function printName()
    {
        echo $this->name;
    }
    function printImg()
    {
        echo $this->img;
    }

    function printPosition()
    {
        echo $this->position;
    }

    function printID()
    {
        echo str_replace(' ', '', $this->position).substr($this->name, 0,2);;
    }

    function printBio()
    {
        echo $this->bio;
    }
    function printEmail()
    {
        echo $this->email;
    }
}