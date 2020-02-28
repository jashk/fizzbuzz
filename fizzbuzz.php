<?php

require './vendor/autoload.php';

use Src\Printer;
use Src\Replacers\IT;
use Src\Replacers\Linio;
use Src\Replacers\Linianos;

$replacers = [
    new Linianos,
    new Linio,
    new IT,
];

$printer = new Printer($replacers);

$printer->print(100, 1, ",");
