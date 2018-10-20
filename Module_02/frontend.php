<?php

require __DIR__.'/autoload.php';

$person = new InfoEnter\People\Person;
$person->setName('Fernando');
$person->setAge('34');
$person->setWeight(70);

var_dump($person);