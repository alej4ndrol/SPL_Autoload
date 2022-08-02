<?php
class Dog extends Animal
{
    public function __construct($say)
    {
        $this->say = $say;
    }

    public function getCountOfLegs()
    {
        return 4;
    }
    public function saySomething()
    {
        echo "I can't talk!";
    }
}