<?php 
namespace App\animals;

use App\core\abstractAnimal;

use App\core\herbivoresIntreface;
use App\core\furryAnimalInterface;

class rabbit extends abstractAnimal implements herbivoresIntreface,furryAnimalInterface
{   
    protected string $speciesType ="Królik";
   

    /**
     * Contains and return sting with information with animal feedback about meat food
     *
     * @return string
     */
    public function feedWithVeggies():string
    {   
        return $this .' kooooocha marchew';
    }

     /**
     * Should contains and return sting with information with animal feedback brushing fur
     *
     * @return string
     */
    public function brushFur():string
    {
        return $this->getName() .' tupta wesoło nóżką';
    }
}