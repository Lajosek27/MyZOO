<?php 
namespace App\core;


abstract class abstractAnimal
{   
    protected string $speciesType;
    private string $name;
    final public function __construct($name)
    {
        $this->name = $name;
        $this->setSpeciesType();
    }



    /**
     * Function reqiure to force inplement $speciesType in child class
     *
     * @return string
     */
    final public function setSpeciesType() : String
    {   
        if(!isset($this->speciesType) || empty($this->speciesType))
        {
            throw new \Exception("You have to set \$spicieType in your  class called ".$this->name);
        }
        return $this->speciesType ;
    }
    
    /**
     * Return always speciesType and name of our animal class 
     *
     * @return string
     */
    final public function __toString(){
        return $this->speciesType .' '. $this->name;
    }
    

   
}