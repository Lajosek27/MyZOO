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


       
        // var_dump($_SESSION[$animalType]['captured']);
        // var_dump($this->animal->isCaptured());
       
        if(isset($_POST['ZOO']))
        {   
            
            $this->animal->setCaptured(true);
            $_SESSION[$animalType]['captured'] = true;

        }elseif(isset($_POST['wild'])){
            $this->animal->setCaptured(false);
            $_SESSION[$animalType]['captured'] = false;
        }

        if(isset($_SESSION[$animalType]['captured']) && !empty($_SESSION[$animalType]['captured']))
        {
            $this->animal->setCaptured($_SESSION[$animalType]['captured']);
        }
        // var_dump($this->animal->isCaptured());
        $this->template->render(
            'animal',
            $this->animal,
            $args = [
                'name' => $this->animal,
                'animalType' => $animalType,
                'captured' => $this->animal->isCaptured()
        ]);
        // return $this->animal;
        
    }
}

