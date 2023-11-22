<?php 
namespace Dog;

class Dog implements interfaseAnimal
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