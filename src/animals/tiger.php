<?php 
namespace App\animals;

use App\core\abstractAnimals;


class tiger 
{   

    public function makeSound()
    {
        return 'ROoooRRRR';
    }
    public function __invoke()
    {
        return 'Tygrys ';
    }
}