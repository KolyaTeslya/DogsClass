<?php

use PHPUnit\Framework\TestCase;
use Dogs\ShibaInu;
use Dogs\Pug;
use Dogs\Dachshund;
use Dogs\PlushLabrador;
use Dogs\RubberDachshund;

require_once __DIR__ . '/vendor/autoload.php';

class DogTest extends TestCase
{
    public function testShibaInu()
    {
        $dog = new ShibaInu();
        $this->assertEquals("Woof! Woof!", $dog->makeSound());
        $this->assertEquals("Собака полює.", $dog->hunt());
    }

    public function testPug()
    {
        $dog = new Pug();
        $this->assertEquals("Woof! Woof!", $dog->makeSound());
        $this->assertEquals("Мопс занадто лінивий для полювання.", $dog->hunt());
    }

    public function testDachshund()
    {
        $dog = new Dachshund();
        $this->assertEquals("Woof! Woof!", $dog->makeSound());
        $this->assertEquals("Собака полює.", $dog->hunt());
    }

    public function testPlushLabrador()
    {
        $dog = new PlushLabrador();
        $this->assertEquals("", $dog->makeSound());
        $this->assertEquals("Собака полює.", $dog->hunt());
    }

    public function testRubberDachshund()
    {
        $dog = new RubberDachshund();
        $this->assertEquals("Squeak! Squeak!", $dog->makeSound());
        $this->assertEquals("Гумова такса не може полювати.", $dog->hunt());
    }
}



