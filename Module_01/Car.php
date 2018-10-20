<?php

    require_once ("Vehicle.php");


/**
 * Description of Car
 *
 * @author Fernando Britto
 */

    // Herança
class Car extends Vehicle 
{
    //Atributos Private e Public
    private $doors;
    
    public function setDoors($doors){
        $this->doors = $doors;
    }
    
    public function getDoors(){
        return $this->doors;
    }
    
    public function getBrand() {
        return $this->brand; 
    }
}
