<?php 
namespace App\animals;

use App\core\abstractAnimal;
use App\core\herbivoresIntreface;



class elephant extends abstractAnimal implements herbivoresIntreface
{   
    protected string $speciesType ="Słoń";
    

     /**
     * Contains and return sting with information with animal feedback about vege food
     *
     * @return string
     */
    public function feedWithVeggies() :string
    {
        return $this->getName() .' kocha soczyste owoce!';
    }

   
}