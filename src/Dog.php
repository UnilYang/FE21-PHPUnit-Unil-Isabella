<?php
// namespace TDD //the namespace was added
class Dog {
    
    public $name;
    public $breed;
    public $hobbies;

    function __construct($name, $breed, $hobbies){

        $this->name = $name;
        $this->breed = $breed;
        $this->hobbies = $hobbies;
    }

    public function bark() {
        return "woof woof";
    }

    public function printInfo() {
        return "My name is {$this->name}, I am a {$this->breed} and I like to {$this->hobbies}";
    }
}