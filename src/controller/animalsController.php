<?php 

namespace  App\Controller;

use App\core\template;
use App\animals\tiger;
use App\animals\rino;


/**
 * Get animal spicies name and add to temaplete all methodes
 */
class animalsController
{    
    private $animal;
    private $template;
    public function __construct()
    {
        $this->template = new template();
    }
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
        
       
       $this->template->render(
        'animal',
        $this->animal,
        $args = [
            'name' => $this->animal
        ]);
        // return $this->animal;
        
    }
}

