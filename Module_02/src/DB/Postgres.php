<?php

namespace InfoEnter\DB;

/**
 * Description of Postgres
 *
 * @author Fernando Britto
 */
class Postgres implements Db {
    public function connect() :string
    {
        return 'connected to Postgres';
    }
}
