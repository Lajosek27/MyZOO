<?php 
namespace App\animals;

use App\core\abstractAnimal;
use App\core\carnivorousIntreface;

class tiger extends abstractAnimal implements carnivorousIntreface
{   
    protected string $speciesType ="Tygrys";
   

    /**
     * Contains and return sting with information with animal feedback about meat food
     *
     * @return string
     */
    public function feedWithMeat():string
    {   
        return $this .' jest bardzo szczęśliwy, że otrzymał krwisty stek';
    }
}