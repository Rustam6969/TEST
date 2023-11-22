<?php 
namespace Cat; 

class Cat implements interfaseAnimal
{
    public function makesound()
    {
        return "Meow";
    }
    public function jump()
    {
        return "Far";
    }
}