<?php 

namespace App\core;

interface  furryAnimalInterface 
{
    /**
     * Should contains and return sting with information with animal feedback about brushing fur
     *
     * @return string
     */
    public function brushFur():string;
}