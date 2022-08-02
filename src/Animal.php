<?php
class Animal
{
    protected $countOfLegs;
    protected $say;

    public function getCountOfLegs(){
        return $this->countOfLegs;
    }

    public function saySomething(){
        echo $this->say;
        // return $this->say;
    }
}