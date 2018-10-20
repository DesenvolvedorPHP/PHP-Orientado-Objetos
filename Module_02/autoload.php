<?php

require __DIR__.'/src/Autoload.php';

$autoload = new InfoEnter\Autoload;
$autoload->register();
$autoload->addNamespace('InfoEnter', 'src');

