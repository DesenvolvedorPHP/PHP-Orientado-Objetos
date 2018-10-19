<?php

    require_once ("Vehicle.php");
    
/**
 * Description of Motorcycle
 *
 * @author Fernando Britto
 */
class Motorcycle extends Vehicle
{
   
    // Calling parent
    public function __construct($brand = null ,$color = null) {
        parent::__construct($brand, strtoupper($color));
    }
}
