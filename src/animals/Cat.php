<?php
class Cat extends Animal
{
    public function __construct($say)
    {
        $this->say = $say;
    }

    public function getCountOfLegs()
    {
        return 5;
    }
    public function saySomething()
    {
        echo "I can't talk! Myaw";
    }
}