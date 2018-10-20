<?php

require __DIR__.'/src/Person.php';


$name = (new Person)->setName('Fernando');

var_dump($name);