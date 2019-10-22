<?php

class post{
    private $title;
    private $name;
    private $message;
    private $date;


    public function __construct($_title, $_name, $_message, $_date)
    {
        $this->title = $_title;
        $this->name = $_name;
        $this->message = $_message;
        $this->date = $_date;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getDate()
    {
        return $this->date;
    }

}