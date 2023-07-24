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
                $this->animal->setCoverImg('tiger-normal.webp');
                break;
            case 'rino':
                $this->animal = new rino('Kajtek');
                $this->animal->setCoverImg('rino.webp');
                break;
            case 'fox':
                $this->animal = new fox('Mateuszek');
                $this->animal->setCoverImg('fox.webp');
                break;
            case 'elephant':
                $this->animal = new elephant('Trąbalski');
                $this->animal->setCoverImg('elephant.webp');
                break;
            case 'snowLeopard':
                $this->animal = new snowLeopard('Centuś');
                $this->animal->setCoverImg('snow-leopard.jpg');
                break;
            case 'rabbit':
                $this->animal = new rabbit('Kurt');
                $this->animal->setCoverImg('rabbit.webp');
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
                'img' =>  $this->animal->getCoverImg(),
        ]);
     
        
    }
}

