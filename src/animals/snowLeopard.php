<?php 
namespace App\animals;

use App\core\abstractAnimal;
use App\core\carnivorousIntreface;
use App\core\furryAnimalInterface;

class snowLeopard extends abstractAnimal implements carnivorousIntreface,furryAnimalInterface
{   
    protected string $speciesType ="Ibrys śnieżny";
   

    /**
     * Contains and return sting with information with animal feedback about meat food
     *
     * @return string
     */
    public function feedWithMeat():string
    {   
        return $this .' uwiebia zjadać małe zwięrzątka';
    }

     /**
     * Should contains and return sting with information with animal feedback brushing fur
     *
     * @return string
     */
    public function brushFur():string
    {
        return $this->getName() .' lubi być czesany ale czeszący ma jeszcze więcej radości';
    }
}