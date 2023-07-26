<?php 
require __DIR__.'/config.php';
require 'vendor/autoload.php';

use App\controller\animalsController;
use App\Controller\siteController;
session_start();
ob_start();
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$animal = new animalsController();
$site = new siteController();

switch($uri)
{   
   
    case '/':
        $site->showHome();
        break;
    case '/tiger':
        echo $animal->showAnimal('tiger');
    break;
    case '/rino':
        echo $animal->showAnimal('rino');
    break;
    case '/fox':
        echo $animal->showAnimal('fox');
    break;
    case '/elephant':
        echo $animal->showAnimal('elephant');
    break;
    case '/snow-leopard':
        echo $animal->showAnimal('snowLeopard');
    break;
    case '/rabbit':
        echo $animal->showAnimal('rabbit');
    break;
    case '/tastTwo':
        $site->showTaskTwo();
        break;
    default:
        $site->showMessage('Przepraszam ale strona nie istnieje 404:/');
    break;
}
