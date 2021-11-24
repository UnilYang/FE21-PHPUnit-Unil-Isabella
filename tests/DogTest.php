<?php
namespace TDD\Test;
use PHPUnit\Framework\TestCase;
// require_once "src/Dog.php";
use TDD\Dog; // it was changed from 'require' to 'use'

class DogTest extends TestCase { // The File Name should be *Test.php
    public function testExist() {
        $this->assertTrue(class_exists("Dog"), "You must declare Dog class");
    }
    public function testBark() {
        $dog = new Dog ("feadfd", "gdaeda", "kjuok");
        $this->assertEquals("woof woof", $dog->bark());
    }
    public function testPrintInfo() {
        $dog1 = new Dog("Tobby", "Terrier", "run, jump and fetch");
        $this->assertEquals("My name is Tobby, I am a Terrier and I like to run, jump and fetch", $dog1->printInfo());

        $dog2 = new Dog("Lagun", "Pug", "eat, sleep and be cute");
        $this->assertEquals("My name is Lagun, I am a Pug and I like to eat, sleep and be cute", $dog2->printInfo());
    }
}