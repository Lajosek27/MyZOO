<?php 
namespace App\core;

class template 
{
    private const BASE_HTML_FILE = BASE_HTML_FILE;
    private const TEMPLATE_PATH = TEMPLATE_PATH;
   
    
   public function render(string $viewName,string $title='',array $param =[])
   {        

        //fill empty var to template
        empty($title) ?? $title = $viewName; 

        
        if(!empty($viewName))
        {   
            require(self::TEMPLATE_PATH . $viewName.'.php');

        }else{
            require(self::BASE_HTML_FILE);
        }
        
        
       
        
   }

  
}