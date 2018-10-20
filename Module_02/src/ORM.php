<?php

namespace InfoEnter;

use InfoEnter\MyException;

/**
 * Description of ORM
 *
 * @author Fernando Britto
 */
class ORM {
    
    private $db;
    
    public function setDb(Db $db)
    {
        $this->db = $db; 
    }
    
    public function select(bool $data)
    {
        if($data){
            return[];
        }
        throw new MyException("Data deveria ser positivo", 1);
    }
}
