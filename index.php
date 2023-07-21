<?php 
require __DIR__.'/config.php';
require 'vendor/autoload.php';

use App\controller\animalsController;

ob_start();
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$animal = new animalsController();


switch($uri)
{   
    default:
    case '/':
        echo"home";
        break;
    case '/tiger':
        echo $animal->showAnimal('tiger');
    break;
    case '/rino':
        echo $animal->showAnimal('rino');
    break;
}
