<?php 
namespace App\animals;

use App\core\abstractAnimal;
use App\core\furryAnimalInterface;
use App\core\omnivorousIntreface;



class fox extends abstractAnimal implements omnivorousIntreface,furryAnimalInterface
{   
    protected string $speciesType ="Lis";
    
     /**
     * Contains and return sting with information with animal feedback about meat food
     *
     * @return string
     */
    public function feedWithMeat():string
    {   
        return $this .' uwielbia grać w podchody i wykradać kury z kurnika.';
    }

     /**
     * Contains and return sting with information with animal feedback about vege food
     *
     * @return string
     */
    public function feedWithVeggies() :string
    {
        return $this->getName() .' zadowli się wszystkimi warzywami choć ten '.$this->getSpeciesType().' woli marchewki :P ';
    }

     /**
     * Should contains and return sting with information with animal feedback brushing fur
     *
     * @return string
     */
    public function brushFur():string
    {   
        return $this->getName() .' wydaję z siebie odgłos zadowolenia jakie wydają lisy... jak robi lis?';
    }
}