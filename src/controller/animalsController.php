<?php 

namespace  App\Controller;

use App\animals\tiger;
use App\animals\rino;


/**
 * Get animal spicies name and add to temaplete all methodes
 */
class animalsController
{   
    private $animal;
    public function showAnimal($animalType)
    {  
        switch($animalType)
        {
            case 'tiger':
                $this->animal = new tiger('Prążek');
                break;
            case 'rino':
                $this->animal = new rino('Kajtek');
                break;
        }    
        
       
        return $this->animal;
        
    }
}

