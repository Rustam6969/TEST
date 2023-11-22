<?php 
namespace Cat; 

class Cat extends Animal implements interfaseAnimal
{
    public function makesound()
    {
        return "Meow";
    }
    public function jamp()
    {
        return "Far";
    }
}