<?php 
namespace Dog;

class Dog extends Animal implements interfaseAnimal
{
    public function makesound()
    {
        return "Woof";
    }
    public function jump()
    {
        return "High";
    }
}