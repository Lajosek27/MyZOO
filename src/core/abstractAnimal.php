<?php 
namespace App\core;


abstract class abstractAnimal
{   
    protected string $speciesType;
    private string $name;
    private bool $captured = false;

    private string $coverImg ='myzoo.jpeg';

    final public function __construct($name)
    {
        $this->name = $name;
        $this->getSpeciesType();
        
    }

    /**
     * Function reqiure to force inplement $speciesType in child class
     *
     * @return string
     */
    final public function getSpeciesType() : String
    {   
        if(!isset($this->speciesType) || empty($this->speciesType))
        {
            throw new \Exception("You have to set \$spicieType in your  class called ".get_class($this));
            
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
    
    public function setCaptured($captured)
    {
        $this->captured = $captured;
    }
    public function isCaptured()
    {
        return $this->captured ;
    }

    public function getName():string
    {
        return $this->name;

    }
    public function setCoverImg($imgName)
    {
        $this->coverImg = $imgName;
    }
    public function getCoverImg()
    {
        return  $this->coverImg; 

    }
   
}