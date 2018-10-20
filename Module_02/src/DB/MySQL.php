<?php

namespace InfoEnter\DB;

/**
 * Description of MySQL
 *
 * @author Fernando Britto
 */
class MySQL implements Db{
    public function connect() :string
    {
        return 'connected to MySQL';
    }
}
