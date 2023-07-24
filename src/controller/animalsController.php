<?php 

namespace  App\Controller;

use App\core\template;
use App\animals\snowLeopard;
use App\animals\elephant;
use App\animals\rabbit;
use App\animals\tiger;
use App\animals\rino;
use App\animals\fox;


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
            case 'fox':
                $this->animal = new fox('Mateuszek');
                break;
            case 'elephant':
                $this->animal = new elephant('Trąbalski');
                break;
            case 'snowLeopard':
                $this->animal = new snowLeopard('Centuś');
                break;
            case 'rabbit':
                $this->animal = new rabbit('Kurt');
                break;
        }    


       
       
       
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
        
        $this->template->render(
            'animal',
            $this->animal,
            $args = [
                'animal' => $this->animal,
                'animalType' => $animalType,
                'captured' => $this->animal->isCaptured(),
        ]);
     
        
    }
}

