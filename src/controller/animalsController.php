<?php 

namespace  App\Controller;

use App\animals\tiger;

/**
 * Get animal spicies name and add to temaplete all methodes
 */
class animalsController
{   

    private $aniamalClass;

    
    public function showAnimal()
    {      
        $tiger = new tiger();
        return $tiger->makeSound();
        
        
    }
}

