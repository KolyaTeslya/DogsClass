<?php

namespace Dogs;

class Dog
{
    public function makeSound()
    {
        return "Woof! Woof!";
    }

    public function hunt()
    {
        return "Собака полює.";
    }
}

class ShibaInu extends Dog
{
}

class Pug extends Dog
{
    public function hunt()
    {
        return "Мопс занадто лінивий для полювання.";
    }
}

class Dachshund extends Dog
{
}

class PlushLabrador extends Dog
{
    public function makeSound()
    {
        return "";
    }
}

class RubberDachshund extends Dog
{
    public function makeSound()
    {
        return "Squeak! Squeak!";
    }

    public function hunt()
    {
        return "Гумова такса не може полювати.";
    }
}
