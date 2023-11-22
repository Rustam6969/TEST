<?php 
namespace Dog;

class Dog implements interfaseAnimal
{
    public function makesound()
    {
        return "Woof";
    }
    public function jamp()
    {
        return "High";
    }
}