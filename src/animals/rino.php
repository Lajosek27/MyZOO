<?php 
namespace App\animals;

use App\core\abstractAnimal;
use App\core\herbivoresIntreface;


class rino extends abstractAnimal implements herbivoresIntreface
{   
    protected string $speciesType ="Nosorożec";
    
    public function feedWithVeggies() :string
    {
        return $this .' reaguje na warzywa z entuzjazmem, przystępując do nich z apetytem :)';
    }
}