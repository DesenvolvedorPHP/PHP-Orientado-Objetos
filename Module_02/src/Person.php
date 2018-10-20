<?php

class Person {
    public function setName($name)
    {
        if(!is_string($name)){
          die('Não é uma string');  
        }        
        return $name;
    }
}
