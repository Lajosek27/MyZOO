<?php 
require 'vendor/autoload.php';

use App\controller\animalsController;

ob_start();
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri)
{   
    default:
    case '/':
        echo"home";
        break;
    case '/tiger':
        echo"Tygrysek";
        $animal = new animalsController('tiger');
        echo $animal->showAnimal();
    break;
}
