<?php 
namespace Animal;

use Dog\Dog;

abstract class Animal {
    protected $name;

    public function __construct($name){
        $this->$name = $name;
    }

    abstract public function makesound();
    abstract public function jump();
}

// class Dog extends Animal {
//     public function makesound()
//     {
//         return "Woof";
//     }
//     public function jamp()
//     {
//         return "High";
//     }
// }    

// class Cat extends Animal{
//     public function makesound()
//     {
//         return "Meow";
//     }
//     public function jump()
//     {
//         return "Far";
//     }
// }    
