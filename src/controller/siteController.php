<?php 

namespace  App\Controller;

use App\core\template;


/**
 * Display massage on homepage
 */
class siteController
{    
    private $template;
    public function __construct()
    {
        $this->template = new template();
    }


    public function showHome()
    {

        $this->template->render(
            'base',
            'MyZOO',
            );
    }
    public function showMessage($message)
    {

        $this->template->render(
            'index',
            'MyZOO',
            $args = [
               'message' => $message
            ]
            );
    }
    public function showTaskTwo()
    {

        $this->template->render(
            'tastTwo',
            'MyZOO',
           
            );
    }
}