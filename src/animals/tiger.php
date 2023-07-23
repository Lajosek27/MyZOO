<?php 
namespace App\animals;

use App\core\abstractAnimal;
use App\core\carnivorousIntreface;
use App\core\furryAnimalInterface;

class tiger extends abstractAnimal implements carnivorousIntreface,furryAnimalInterface
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

     /**
     * Should contains and return sting with information with animal feedback brushing fur
     *
     * @return string
     */
    public function brushFur():string
    {
        return $this->speciesType .'Mruczy z zadowleniem z gdy ma wyczesane futerko';
    }
}